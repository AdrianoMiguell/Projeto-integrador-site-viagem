<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\ImagemCidade;
use App\Models\ImagemTuristica;
use App\Models\PontoTuristico;
use App\Models\Roteiro;
use App\Models\Viagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ViagemController extends Controller
{

    // Adicionar a view do usuario, para mostrar os dados  

    public function view_roteiro(Request $request)
    {
        if (!isset($request->id)) {
            $errors = "Roteiro de viagem não encontrado!";
            return back()->withErrors($errors);
        }

        $viagem = Viagem::findOrFail($request->id);

        $roteiros = Roteiro::where('viagem_id', $request->id)->get();
        $pontos_turisticos = PontoTuristico::where('viagem_id', $request->id)->get();
        $imagens_turisticas = ImagemTuristica::where('viagem_id', $request->id)->get();
        $imagens_cidades = ImagemCidade::where('viagem_id', $request->id)->get();

        $cidades = Cidade::all();

        return view('admin.viagem.section-roteiro-viagem', compact('viagem', 'pontos_turisticos', 'imagens_turisticas', 'imagens_cidades', 'cidades', 'roteiros'));
    }

    public function create(Request $request)
    {

        $request->validate([
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'sugestoes' => 'nullable|string',
            'cidade_id' => 'required|string',
        ]);

        $viagem = $request->except('_token');

        $viagen_ja_existente = Viagem::where('cidade_id', $viagem['cidade_id'])->get();
        if ($viagen_ja_existente != null && count($viagen_ja_existente) > 0) {
            $errors = "Viagem a esta cidade já cadastrada!";
            return redirect()->route('workspaceadmin')->withErrors($errors);
        }

        $create_viagem = Viagem::create($viagem);

        return redirect()->route('viagem.view', ['id' => $create_viagem['id']])->with('status', 'Nova viagem cadastrado!');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'sugestoes' => 'nullable|string',
            'cidade_id' => 'required',
        ]);


        $viagem = $request->except('_token', '_method');

        $edit_viagem = Viagem::findOrFail($viagem['id'])->update($viagem);

        return redirect()->route('viagem.view', ['id' => $viagem['id']])->with('status', 'Dados da página de viagem editados!');
    }

    public function delete(Request $request)

    {

        $request->validate([
            'id' => 'required',
        ]);

        // Deletar possiveis imagens de pontos turisticos ligadas a viagem
        $imagens = ImagemTuristica::where('viagem_id', $request->id)->get();

        if (count($imagens) > 0) {
            foreach ($imagens as $imagem) {
                if (Storage::exists($imagem['caminho'])) {
                    Storage::delete($imagem['caminho']);
                }
            }
        }

        ImagemTuristica::where('viagem_id', $request->id)->delete();

        // Deletar possiveis imagens da cidade ligadas a viagem
        $imagens_cidade = ImagemCidade::where('viagem_id', $request->id)->get();

        if (count($imagens_cidade) > 0) {
            foreach ($imagens_cidade as $imagem) {
                if (Storage::exists($imagem['caminho'])) {
                    Storage::delete($imagem['caminho']);
                }
            }
        }

        ImagemCidade::where('viagem_id', $request->id)->delete();

        // Deletar os pontos turisticos dessa viagem
        PontoTuristico::where('viagem_id', $request->id)->delete();

        // Deletando os dados do roteiro de viagem
        Viagem::findOrFail($request->id)->delete();

        return redirect()->route('workspaceadmin')->with('status', 'Roteiro de viagem deletado com sucesso!');
    }
}
