<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('APP_NAME', 'Realize Pilates - Login') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #e9f4e4 0%, #f8f9fa 100%);
            font-family: "Figtree", sans-serif;
        }

        .auth-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .auth-card {
            width: 100%;
            max-width: 450px;
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            animation: fadeIn 0.4s ease-in-out;
        }

        /* Animação leve */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .auth-brand {
            text-align: center;
            padding: 35px 25px;
            background: linear-gradient(135deg, #2d5016 0%, #4a7c2a 100%);
            color: white;
        }

        .auth-brand i {
            font-size: 3rem;
        }

        .auth-brand h3 {
            font-weight: 600;
            margin-top: 10px;
        }

        .auth-body {
            padding: 35px;
            background: white;
        }

        /* Botão Voltar */
        .btn-voltar {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 500;
            background: white;
            border: 1px solid #ccc;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.2s ease;
        }

        .btn-voltar:hover {
            background: #f0f0f0;
            transform: translateX(-3px);
        }
    </style>
</head>

<body>

    <!-- Botão voltar -->
    <a href="{{ url('/') }}" class="btn-voltar d-flex align-items-center gap-2">
        <i class="bi bi-arrow-left"></i>
        Voltar
    </a>

    <div class="auth-wrapper">
        <div class="auth-card">

            {{-- Cabeçalho estilizado --}}
            <div class="auth-brand">
                <i class="bi bi-flower1"></i>
                <h3>Realize Pilates</h3>
                <p class="small opacity-75 mb-0">Acesse sua conta com segurança</p>
            </div>

            {{-- Conteúdo dinâmico --}}
            <div class="auth-body">
                {{ $slot }}
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>