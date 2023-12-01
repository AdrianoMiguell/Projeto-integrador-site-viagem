<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pais;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaisController extends Controller
{
    // public function create(Request $request)
    // {

    //     $request->validate([
    //         'name' => 'required|string',
    //         'description' => 'nullable|string',
    //         'bandeira' => 'image|max:4500'
    //     ]);

    //     $pais = $request->except('token');

    //     // dd($pais);
    //     if (!Storage::exists($pais['bandeira'])) {
    //         $pais['bandeira'] = $request->bandeira->store('/img/bandeiras_dos_paises');
    //     }

    //     // dd($pais);
    //     Pais::create($pais);

    //     return redirect()->route('workspaceadmin')->with('status', 'Novo país cadastrado!');
    // }

    // public function edit(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string',
    //         'description' => 'required|string',
    //     ]);

    //     $pais = $request->except('token');

    //     Pais::findOrFail($request['id'])->update($pais);

    //     return redirect()->route('workspaceadmin')->with('status', 'Registro de país editado com sucesso!');
    // }

    // public function delete(Request $request)
    // {

    //     Pais::findOrFail($request->id)->delete();

    //     return redirect()->route('workspaceadmin')->with('status', 'País deletado com sucesso!');
    // }
}
