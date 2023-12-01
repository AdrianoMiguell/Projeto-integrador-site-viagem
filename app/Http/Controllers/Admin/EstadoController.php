<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstadoController extends Controller
{

    public function create(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'nullable|string',
            'bandeira' => 'nullable|image',
            'pais' => 'required|string',
        ]);

        $estado = $request->except('_token');
        // dd($estado);
        if (isset($estado['bandeira']) && !Storage::exists($estado['bandeira'])) {
            $estado['bandeira'] = $request->bandeira->store('/img/bandeiras_dos_estados');
        }
        
        Estado::create($estado);

        return redirect()->route('workspaceadmin')->with('status', 'Novo estado cadastrado!');
    }

    public function edit(Request $request)
    {
        // dd($request);

        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'nullable|string',
            'img_bandeira' => 'nullable|image',
            'pais' => 'required|string',
        ]);

        $estado = $request->except('_token');

        if (isset($estado['img_bandeira'])) {
            if (isset($estado['bandeira'])  && Storage::exists($estado['bandeira'])) {
                Storage::delete($estado['bandeira']);
            }

            $estado['bandeira'] = $request->img_bandeira->store('/img/bandeiras_dos_estados');
        }

        Estado::findOrFail($request['id'])->update($estado);

        return redirect()->route('workspaceadmin')->with('status', 'Registro de estado editado com sucesso!');
    }

    public function delete(Request $request)
    {

        $paises = Estado::where('estado_id', $request->id);

        if (isset($paises) && count($paises) > 0) {
            $errors = "estado não deletado, pois está sendo referenciado por algum país";
            return redirect()->route('workspaceadmin')->withError($errors);
        } else {

            $estado = Estado::findOrFail($request->id);

            if (Storage::exists($estado->bandeira)) {
                Storage::delete($estado->bandeira);
            }
            $estado->delete();
            // Estado::findOrFail($request->id)->delete();
            return redirect()->route('workspaceadmin')->with('status', 'estado deletado com sucesso!');
        }
    }
}
