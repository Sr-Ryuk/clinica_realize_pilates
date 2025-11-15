<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;

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
| Dashboard unificado para TODOS os tipos de usuário
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->get('/dashboard', function () {
    $user = auth()->user();
    $role = $user->role; // ← CORRIGIDO

    return match ($role) {
        'admin'     => redirect()->route('admin.dashboard'),
        'instrutor' => redirect()->route('instrutor.dashboard'),
        'aluno'     => redirect()->route('aluno.dashboard'),
        default     => abort(403, 'Acesso não permitido'),
    };
})->name('dashboard');



/*
|--------------------------------------------------------------------------
| ROTAS EXCLUSIVAS DO ADMIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');
});


/*
|--------------------------------------------------------------------------
| ROTAS EXCLUSIVAS DE INSTRUTOR
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:instrutor'])->group(function () {
    Route::get('/instrutor/dashboard', function () {
        return view('instrutor.dashboard');
    })->name('instrutor.dashboard');
});



/*
|--------------------------------------------------------------------------
| ROTAS EXCLUSIVAS DO ALUNO
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:aluno'])->group(function () {
    Route::get('/aluno/dashboard', function () {
        return view('aluno.dashboard');
    })->name('aluno.dashboard');
});


/*
|--------------------------------------------------------------------------
| Perfil (todos os logados)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Auth (login, register, etc)
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';
