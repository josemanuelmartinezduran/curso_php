<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function form()
    {
        $direcciones = Direccion::all();
        return view("usuario.form", ["direcciones" => $direcciones]);
    }

    function success(){
        return("Usuario creado con éxito");
    }

    function delete(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect("/usuarios");
    }

    function update(Request $request, $id){
        $usuario = Usuario::find($id);
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
        $usuario = Usuario::find($request["id"]);
        $usuario->update($validatedData);
        return redirect("/usuarios");
    }

    function lista(){
        $lista_usuarios = Usuario::get();
        return view("usuario.lista", ['usuarios'=>$lista_usuarios]);
    }

    function create(Request $request)
    {
        // Validate and store the new user
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nombre' => 'required',
            'direccion_id' => 'direccion'
        ]);
        var_dump($validatedData);

        $validatedData['password'] = bcrypt($validatedData['password']);
        Usuario::create($validatedData);
        return redirect("/usuarios");
    }


}
