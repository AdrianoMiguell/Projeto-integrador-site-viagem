<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagemTuristica;
use App\Models\PontoTuristico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagemTuristicaController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'imagem' => 'required|image',
            'legenda' => 'required|string',
            'viagem_id' => 'required',
            'ponto_turistico_id' => 'required',
        ]);

        // dd($request);

        $imagem_ponto = $request->except('_token');
        if (isset($imagem_ponto['imagem']) && !Storage::exists($imagem_ponto['imagem'])) {
            $imagem_ponto['caminho'] = $request->imagem->store('/img/pontos_turisticos');
        }

        ImagemTuristica::create($imagem_ponto);

        return redirect()->route('viagem.view', ['id' => $request->viagem_id])->with('status', 'Nova imagem do ponto turistico criada!');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'caminho' => 'required|string',
            'imagem' => 'nullable|image',
            'legenda' => 'nullable|string',
            'viagem_id' => 'required',
            'ponto_turistico_id' => 'required',
        ]);

        $imagem_ponto = $request->except('_token', '_method');

        if (isset($imagem_ponto['imagem'])) {
            if (isset($imagem_ponto['caminho'])  && Storage::exists($imagem_ponto['caminho'])) {
                Storage::delete($imagem_ponto['caminho']);
            }

            $imagem_ponto['caminho'] = $request->imagem->store('/img/pontos_turisticos');
            // dd($imagem_ponto['imagem']);
        }

        ImagemTuristica::findOrFail($request->id)->update($imagem_ponto);

        return redirect()->route('viagem.view', ['id' => $request->viagem_id])->with('status', 'Imagem do ponto turistico editada!');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'viagem_id' => 'required',
        ]);

        $imagem = ImagemTuristica::findOrFail($request->id);

        if (Storage::exists($imagem['caminho'])) {
            Storage::delete($imagem['caminho']);
        }

        $imagem->delete();

        return redirect()->route('viagem.view', ['id' => $request->viagem_id])->with('status', 'Imagem turistica deletada!');
    }
}
