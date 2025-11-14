<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo - Realize Pilates</title>

    {{-- Arquivos padrão do painel --}}
    @vite([
    'resources/js/app.js',
    'resources/css/admin.css'
    ])

    {{-- Estilos específicos por página --}}
    @stack('styles')
</head>

<body>

    <!-- SIDEBAR DINÂMICA -->
    <x-sidebar />

    <!-- CONTEÚDO PRINCIPAL -->
    <div class="content-area">

        <!-- TOPBAR -->
        <x-admin.topbar />

        <!-- PÁGINA -->
        <main class="p-4">
            @yield('content')
        </main>

    </div>

    {{-- Scripts específicos por página --}}
    @stack('scripts')

</body>

</html>