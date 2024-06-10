<?php

use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\CheckSession;
use Illuminate\Support\Facades\Route;

Route::get('/', [HelloWorldController::class, 'login']);
Route::post('/userlogin', [HelloWorldController::class, 'userlogin']);

Route::get('/creausuario', [UsuarioController::class, 'form'])->middleware(CheckSession::class);;
Route::post('/creandousuario', [UsuarioController::class, 'create'])->middleware(CheckSession::class);;
Route::post('/editandousuario', [UsuarioController::class, 'updateUser'])->middleware(CheckSession::class);;
Route::get('/usuariosuccess', [UsuarioController::class, 'sucess'])->middleware(CheckSession::class);;
Route::get('/usuarios', [UsuarioController::class, 'lista'])->middleware(CheckSession::class);
Route::get('/deleteusuario/{id}', [UsuarioController::class, 'delete'])->middleware(CheckSession::class);;
Route::get('/updateusuario/{id}', [UsuarioController::class, 'update'])->middleware(CheckSession::class);;
Route::get('/userssucess', [HelloWorldController::class, 'success'])->middleware(CheckSession::class);
Route::get('/error', [HelloWorldController::class, 'error']);

