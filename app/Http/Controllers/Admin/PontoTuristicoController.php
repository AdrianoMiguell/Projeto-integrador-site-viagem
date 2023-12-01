<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagemTuristica;
use App\Models\PontoTuristico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PontoTuristicoController extends Controller
{
    public function create(Request $request)
    {

        $request->validate([
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'viagem_id' => 'required',
        ]);

        $ponto_turistico = $request->except('_token');
        PontoTuristico::create($ponto_turistico);

        return redirect()->route('viagem.view', ['id' => $ponto_turistico['viagem_id']])->with('status', 'Novo ponto turistico cadastrado!');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'titulo' => 'required|string',
            'descricao' => 'required|string',
            'viagem_id' => 'required',
        ]);

        $ponto_turistico = $request->except('_token', '_method');

        PontoTuristico::findOrFail($request['id'])->update($ponto_turistico);

        return redirect()->route('viagem.view', ['id' => $ponto_turistico['viagem_id']])->with('status', 'Ponto turistico editado!');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $imagens = ImagemTuristica::where('ponto_turistico_id', $request->id)->get();

        if (count($imagens) > 0) {
            foreach ($imagens as $imagem) {
                if (Storage::exists($imagem['caminho'])) {
                    Storage::delete($imagem['caminho']);
                }
            }
        }

        ImagemTuristica::where('ponto_turistico_id', $request->id)->delete();

        PontoTuristico::findOrFail($request->id)->delete();

        return redirect()->route('viagem.view', ['id' => $request->viagem_id])->with('status', 'Ponto turistico deletado!');
    }
}
