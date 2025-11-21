<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Painel Administrativo') - Realize Pilates</title>

    {{-- Assets padrão --}}
    @vite([
    'resources/js/app.js',
    'resources/css/style.css'
    ])

    {{-- CSS extra por página --}}
    @stack('styles')
</head>

<body>

    {{-- SIDEBAR --}}
    <x-sidebar />

    {{-- ÁREA PRINCIPAL --}}
    <div class="content-area">

        {{-- TOPBAR --}}
        <x-topbar />

        {{-- CONTEÚDO DINÂMICO --}}
        <main class="p-4">
            @yield('content')
        </main>

    </div>

    {{-- SweetAlert2 global --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Scripts específicos de cada página --}}
    @stack('app')

</body>

</html>