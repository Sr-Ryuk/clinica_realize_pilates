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

</head>
{{-- Removidas as classes de corpo do Tailwind --}}

<body>
    {{-- Removida a div de altura mínima do Tailwind --}}
    <div>
        @include('layouts.navigation')

        @isset($header)
        {{--
                  Substituímos classes Tailwind (bg-white dark:bg-gray-800 shadow)
                  por classes Bootstrap (bg-white shadow)
                --}}
        <header class="bg-white shadow">
            {{--
                      Substituímos classes de container do Tailwind (max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8)
                      pelo container padrão do Bootstrap (container-fluid ou container)
                    --}}
            <div class="container-fluid py-3 border-bottom">
                <div class="container">
                    {{ $header }}
                </div>
            </div>
        </header>
        @endisset

        <main class="container py-4">
            {{-- O conteúdo da página será injetado aqui, já formatado com Bootstrap --}}
            {{ $slot }}
        </main>
    </div>

    {{-- ⭐️ Adiciona o Bootstrap JS no final do body para melhor performance ⭐️ --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>