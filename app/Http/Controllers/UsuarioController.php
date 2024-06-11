<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:usuarios',
            'password' => 'required|min:8',
            'nombre' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']); // Hash the password

        $usuario = Usuario::create($validatedData);
        return response()->json($usuario, 201); // 201 Created status
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario) // Laravel automatically finds the user by ID
    {
        return response()->json($usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:usuarios,username,' . $usuario->id, // Unique except current user
            'password' => 'nullable|min:8',
            'nombre' => 'required',
        ]);

        if ($request->has('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        $usuario->update($validatedData);
        return response()->json($usuario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return response()->json(['message' => 'Usuario deleted']);
    }

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

   /*  function update(Request $request, $id){
        $usuario = Usuario::find($id);
        return view("/usuario.edit", ["usuario"=>$usuario]);
    }
 */
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
