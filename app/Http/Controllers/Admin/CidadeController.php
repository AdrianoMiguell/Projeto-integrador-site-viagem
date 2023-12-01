<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{

    public function create(Request $request)
    {
        dd($request);
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'estado_id' => 'required',
        ]);

        $cidade = $request->except('_token');

        Cidade::create($cidade);

        return redirect()->route('workspaceadmin')->with('status', 'Novo cidade cadastrado!');
    }

    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'estado_id' => 'required',
        ]);

        $cidade = $request->except('_token');

        Cidade::findOrFail($request['id'])->update($cidade);

        return redirect()->route('workspaceadmin')->with('status', 'Registro de cidade editado com sucesso!');
    }

    public function delete(Request $request)
    {

        $paises = Cidade::where('cidade_id', $request->id);

        if (isset($paises) && count($paises) > 0) {
            $errors = "cidade não deletado, pois está sendo referenciado por algum país";
            return redirect()->route('workspaceadmin')->withError($errors);
        } else {
            Cidade::findOrFail($request->id)->delete();
            return redirect()->route('workspaceadmin')->with('status', 'cidade deletado com sucesso!');
        }
    }
}
