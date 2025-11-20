<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Aluno\DashboardController;
use App\Http\Controllers\Aluno\AulaController;
use App\Http\Controllers\Aluno\FinanceiroController;

Route::middleware(['auth', 'role:aluno'])
    ->prefix('aluno')
    ->name('aluno.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/aulas', [AulaController::class, 'index'])
            ->name('aulas.index');

        Route::post('/aulas/{aula}/agendar', [AulaController::class, 'agendar'])
            ->name('aulas.agendar');

        Route::post('/aulas/{aula}/cancelar', [AulaController::class, 'cancelar'])
            ->name('aulas.cancelar');

        Route::get('/mensalidades', [FinanceiroController::class, 'index'])
            ->name('mensalidades.index');
    });
