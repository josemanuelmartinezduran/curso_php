<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index(){
        return view('template', ['message' => 'Hello World!',
                             'array' => ["uno", "dos", "tres"],
                             'variable' => 1,
                            'test' => '{Hola}',
                            'myjson' => [
                                [
                                    "nombre" => "jose",
                                    "edad" => "40"
                                ],
                                [
                                    'nombre' => "luis",
                                    'edad' => 25

                                ]
                            ]]);
    }

    public function ejemplo(){
        return("Hola Ejemplo");
    }

    public function userform(){
        return view('usuarios.create');
    }

    public function usercreate(Request $r): RedirectResponse
    {
        $nombre = $r->input('name');
        return redirect('/userssucess');
    }

    public function success(){
        return view("dashboard");
    }

    public function error(){
        return("Usuario no valido");
    }

    public function login(){
        return view("login");
    }

    public function userlogin(Request $r):  RedirectResponse{
        $username = $r->input("username");
        $password = $r->input("password");
        if($username == "admin" && $password == "admin"){
            $r->session()->put("validuser", true);
            $r->session()->put("usename", $username);
            $r->session()->put("rol", "admin");
            return redirect('/userssucess');
        }
        return redirect('/error');
    }
}
