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
        $cidades = Cidade::all();
        $viagens = Viagem::all();
        $pontos_turisticos = PontoTuristico::all();

        return view('admin.workspaceadmin', compact('estados', 'cidades', 'viagens', 'pontos_turisticos'));
    }

}
