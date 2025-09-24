<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlunoController;

Route::put('/aluno/{id}', [AlunoController::class, 'update']); //backend atualiza
Route::get('/aluno/{id}/edit', [AlunoController::class, 'edit']); //display do update

Route::get('/', [AlunoController::class, 'index']); //display de mostrar todos

Route::post('/aluno', [AlunoController::class, 'store']); // backend de cadastro
Route::get('/aluno/create', [AlunoController::class, 'create']);

Route::delete('/aluno/{id}', [AlunoController::class, 'destroy']);

//posso fazer todas estas rotas apenas com resource
//Route::resource('aluno', AlunoController::class);


