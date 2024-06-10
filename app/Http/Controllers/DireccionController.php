<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    //
    public function list(){
        $lista_direcciones = Direccion::get();
        return view("direccion.lista", ['direcciones'=>$lista_direcciones]);
    }

    function delete(Request $request, $id){
        $usuario = Direccion::find($id);
        $usuario->delete();
        return redirect("/direccion");
    }

    function update(Request $request, $id){
        $usuario = Direccion::find($id);
        return view("/usuario.edit", ["usuario"=>$usuario]);
    }

    function updateUser(Request $request)
    {
        // Validate and store the new user
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nombre' => 'required',
            'id' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $usuario = Direccion::find($request["id"]);
        $usuario->update($validatedData);
        return redirect("/usuarios");
    }

    function create(Request $request){
        return view("direccion.create");
    }

    function doCreate(Request $request)
    {
        // Validate and store the new user
        $validatedData = $request->validate([
            'calle' => 'required',
            'numero' => 'required',
        ]);
        var_dump($validatedData);
        Direccion::create($validatedData);
        return redirect("/direccion");
    }
}
