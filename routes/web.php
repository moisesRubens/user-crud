<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);       // lista usuários
Route::get('/users/create', [UserController::class, 'create']); // mostra form
Route::post('/users', [UserController::class, 'store']);      // cria usuário
Route::get('/users/{id}/edit', [UserController::class, 'edit']); // mostra form de edição
Route::put('/users/{id}', [UserController::class, 'update']);   // atualiza usuário
Route::delete('/users/{id}', [UserController::class, 'destroy']); // deleta usuário



Route::put('/aluno/{id}', [AlunoController::class, 'update']); //backend atualiza
Route::get('/aluno/{id}/edit', [AlunoController::class, 'edit']); //display do update

Route::get('/aluno', [AlunoController::class, 'index']); //display de mostrar todos

Route::post('/aluno', [AlunoController::class, 'store']); // backend de cadastro
Route::get('/aluno/create', [AlunoController::class, 'create']);

Route::delete('/aluno/{id}', [AlunoController::class, 'destroy']);

//posso fazer todas estas rotas apenas com resource
//Route::resource('aluno', AlunoController::class);


