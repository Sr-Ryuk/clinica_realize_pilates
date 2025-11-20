<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instrutor\DashboardController;
use App\Http\Controllers\Instrutor\AulaController;
use App\Http\Controllers\Instrutor\EvolucaoController;
use App\Http\Controllers\Instrutor\AnamneseController;

Route::middleware(['auth', 'role:instrutor'])
    ->prefix('instrutor')
    ->name('instrutor.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('aulas', AulaController::class);
        Route::resource('evolucoes', EvolucaoController::class);
        Route::resource('anamneses', AnamneseController::class);
    });
