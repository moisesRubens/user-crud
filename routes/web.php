<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', [AlunoController::class, 'view_login'])->name('login');
Route::post('/', [AlunoController::class, 'login'])->name('login_usr');

Route::get('/register', [AlunoController::class, 'create'])->name('register');
Route::post('/register', [AlunoController::class, 'store'])->name('store');