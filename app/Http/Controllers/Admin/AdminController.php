<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Continente;
use App\Models\Estado;
use App\Models\Pais;
use App\Models\PontoTuristico;
use App\Models\Viagem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {

        $estados = Estado::all();
        $pontos_turisticos = PontoTuristico::all();
        $cidades = Cidade::all();
        $viagens = Viagem::paginate(15);

        return view('admin.workspaceadmin', compact('estados', 'cidades', 'viagens', 'pontos_turisticos'));
    }

    public function search_viagem(Request $request)
    {

        $palavra = $request->search;

        if (isset($request->search)) {
            $viagens = Viagem::whereRaw('LOWER(descricao) LIKE ?', ['%' . strtolower($palavra) . '%'])->orWhere('titulo','like' . '%' . strtolower($palavra) . '%')->paginate(25);
        } else {
            $viagens = Viagem::paginate(25);
        }

        $cidades = Cidade::all();
        $pontos_turisticos = PontoTuristico::all();
        $estados = Estado::all();

        return view('admin.workspaceadmin', compact('estados', 'cidades', 'viagens', 'pontos_turisticos'));
    }
}
