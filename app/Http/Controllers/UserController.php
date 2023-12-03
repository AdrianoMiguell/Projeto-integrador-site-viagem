<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\ImagemCidade;
use App\Models\ImagemTuristica;
use App\Models\PontoTuristico;
use App\Models\Roteiro;
use App\Models\Viagem;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function view()
    {
        $estados = Estado::all();
        $cidades = Cidade::all();
        $viagens = Viagem::all();

        return view('welcome', compact('estados', 'cidades', 'viagens'));
    }

    public function view_viagem(Request $request)
    {
        $estados = Estado::all();
        $cidades = Cidade::all();
        $viagens = Viagem::all();

        $viagem = Viagem::where('cidade_id', $request->cidade_id)->limit(1)->get();
        if (empty($viagem[0]->id)) {
            return view('client.view_roteiro_viagem', compact('estados', 'cidades', 'viagens'));
        }

        $imagens_cidade = ImagemCidade::where('viagem_id', $viagem[0]->id)->get();
        $pontos_turisticos = PontoTuristico::where('viagem_id', $viagem[0]->id)->get();
        $imagens_turisticas = ImagemTuristica::where('viagem_id', $viagem[0]->id)->get();
        $roteiros = Roteiro::where('viagem_id', $viagem[0]->id)->get();

        return view('client.view_roteiro_viagem', compact('estados', 'cidades', 'viagens', 'viagem', 'roteiros', 'pontos_turisticos', 'imagens_turisticas', 'imagens_cidade'));
    }

    public function search_viagem(Request $request)
    {

        $palavra =  $request->search;

        $palavraChave = $request->input('palavra_chave');

        $estados = Estado::all();
        $cidades = Cidade::all();
        $viagens = Viagem::all();

        // Pesquisa
        $cidades_pesquisadas = Cidade::whereRaw('LOWER(nome) LIKE ?', ['%' . strtolower($palavra) . '%'])->get();

        // Pesquisa
        $estados_pesquisadas = Estado::whereRaw('LOWER(nome) LIKE ?', ['%' . strtolower($palavra) . '%'])->get();

        return view('client.view_pesquisa', compact('estados', 'cidades', 'viagens', 'cidades_pesquisadas', 'estados_pesquisadas'));
    }
}
