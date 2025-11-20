<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AlunoController;
use App\Http\Controllers\Admin\InstrutorController;
use App\Http\Controllers\Admin\PlanoController;
use App\Http\Controllers\Admin\AulaController;
use App\Http\Controllers\Admin\AgendamentoController;
use App\Http\Controllers\Admin\MensalidadeController;
use App\Http\Controllers\Admin\EquipamentoController;
use App\Http\Controllers\Admin\ManutencaoController;

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('alunos', AlunoController::class);
        Route::resource('instrutores', InstrutorController::class);
        Route::resource('planos', PlanoController::class);

        Route::resource('aulas', AulaController::class);
        Route::resource('agendamentos', AgendamentoController::class);

        Route::resource('mensalidades', MensalidadeController::class);

        Route::resource('equipamentos', EquipamentoController::class);
        Route::resource('manutencoes', ManutencaoController::class);
    });
