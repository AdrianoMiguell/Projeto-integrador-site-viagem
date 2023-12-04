<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Roteiro;
use Illuminate\Http\Request;

class RoteiroController extends Controller
{
    // 'titulo',
    // 'manha',
    // 'subtitulo_manha',
    // 'tarde',
    // 'subtitulo_tarde',
    // 'noite',
    // 'subtitulo_noite',
    // 'viagem_id'

    public function create(Request $request)
    {

        $request->validate([
            'titulo' => 'required|string',
            'manha' => 'required|string',
            'subtitulo_manha' => 'required|string',
            'tarde' => 'required|string',
            'subtitulo_tarde' => 'required|string',
            'noite' => 'required|string',
            'subtitulo_noite' => 'required|string',
            'viagem_id' => 'required|string',

        ]);

        $roteiro = $request->except('_token');
        Roteiro::create($roteiro);

        return redirect()->route('viagem.view', ['id' => $roteiro['viagem_id']])->with('status', 'Novo ponto turistico cadastrado!');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string',
            'manha' => 'required|string',
            'subtitulo_manha' => 'required|string',
            'tarde' => 'required|string',
            'subtitulo_tarde' => 'required|string',
            'noite' => 'required|string',
            'subtitulo_noite' => 'required|string',
            'viagem_id' => 'required|string',

        ]);

        $roteiro = $request->except('_token', '_method');

        Roteiro::findOrFail($request['id'])->update($roteiro);

        return redirect()->route('viagem.view', ['id' => $roteiro['viagem_id']])->with('status', 'Roteiro de viagem editado!');
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        Roteiro::findOrFail($request->id)->delete();

        return redirect()->route('viagem.view', ['id' => $request->viagem_id])->with('status', 'Roteiro de viagem deletado!');
    }
}
