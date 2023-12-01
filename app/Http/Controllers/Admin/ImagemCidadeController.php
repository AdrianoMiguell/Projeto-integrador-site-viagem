<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ImagemCidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagemCidadeController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'imagem' => 'required|image',
            'legenda' => 'required|string',
            'viagem_id' => 'required',
        ]);

        $imagem_cidade = $request->except('_token');

        if (!Storage::exists($imagem_cidade['imagem'])) {
            $imagem_cidade['caminho'] = $request->imagem->store('/img/imagens_da_cidade');
        }

        ImagemCidade::create($imagem_cidade);

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
        ]);

        $imagem_cidade = $request->except('_token', '_method');

        if (isset($imagem_cidade['imagem'])) {
            if (isset($imagem_cidade['caminho'])  && Storage::exists($imagem_cidade['caminho'])) {
                Storage::delete($imagem_cidade['caminho']);
            }

            $imagem_cidade['caminho'] = $request->imagem->store('/img/imagens_da_cidade');
            // dd($imagem_cidade['imagem']);
        }

        ImagemCidade::findOrFail($request->id)->update($imagem_cidade);

        return redirect()->route('viagem.view', ['id' => $request->viagem_id])->with('status', 'Imagem do ponto turistico editada!');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'viagem_id' => 'required',
        ]);

        $imagem = ImagemCidade::findOrFail($request->id);

        if (Storage::exists($imagem['caminho'])) {
            Storage::delete($imagem['caminho']);
        }

        $imagem->delete();

        return redirect()->route('viagem.view', ['id' => $request->viagem_id])->with('status', 'Imagem turistica deletada!');
    }
}
