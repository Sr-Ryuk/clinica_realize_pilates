<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Estilo para garantir que o conteúdo preencha a altura total da tela
               e centralize verticalmente e horizontalmente.
            */
        html,
        body {
            height: 100%;
            background-color: #f8f9fa;
            /* Cor de fundo Bootstrap Light */
        }

        .full-height-center {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 1.5rem;
            /* pt-6 equivalente */
        }
    </style>
</head>

<body>
    {{-- Classe personalizada para centralizar o conteúdo --}}
    <div class="full-height-center">

        {{-- Card do Formulário --}}
        {{--
              Substituindo classes do Tailwind (w-full sm:max-w-md mt-6 px-6 py-4...)
              por classes Bootstrap (card shadow-lg p-4 e width fixo ou col)
            --}}
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
            {{ $slot }}
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>