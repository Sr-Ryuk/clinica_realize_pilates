<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Página pública
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Painel do Administrador
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

/*
|--------------------------------------------------------------------------
| Painel do Instrutor (futuro)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:instrutor'])->group(function () {
    Route::get('/instrutor', function () {
        return 'Painel do Instrutor';
    })->name('instrutor.dashboard');
});

/*
|--------------------------------------------------------------------------
| Painel do Aluno (futuro)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:aluno'])->group(function () {
    Route::get('/aluno', function () {
        return 'Painel do Aluno';
    })->name('aluno.dashboard');
});

/*
|--------------------------------------------------------------------------
| Área de Perfil (todos os usuários logados podem editar)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Autenticação (login, logout, register, forgot)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';
