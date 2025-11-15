<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

// Importação importante para registrar middlewares
use App\Http\Middleware\RoleMiddleware;

// Importação do comando que você criou
use App\Console\Commands\DiagnosticoBD;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // Aqui você registra o alias do middleware 'role'
        $middleware->alias([
            'role' => RoleMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })
    ->withCommands([
        DiagnosticoBD::class, // <-- seu comando Artisan registrado aqui
    ])
    ->create();
