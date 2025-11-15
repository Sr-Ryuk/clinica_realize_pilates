<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

    $role = auth()->user()->role->value;

    return match ($role) {
        'admin'     => view('admin.dashboard'),
        'instrutor' => view('instrutor.dashboard'),
        'aluno'     => view('aluno.dashboard'),
        default     => abort(403, 'Acesso não permitido'),
    };
})->name('dashboard');


/*
|--------------------------------------------------------------------------
| ROTAS EXCLUSIVAS DO ADMIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:admin'])->group(function () {

    // futuramente:
    // Route::resource('alunos', AdminAlunoController::class);
    // ...
});


/*
|--------------------------------------------------------------------------
| ROTAS EXCLUSIVAS DE INSTRUTOR
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:instrutor'])->group(function () {

    // futuramente:
    // Route::get('/agenda', ...);
});


/*
|--------------------------------------------------------------------------
| ROTAS EXCLUSIVAS DO ALUNO
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:aluno'])->group(function () {

    // futuramente:
    // Route::get('/minhas-aulas', ...);
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
