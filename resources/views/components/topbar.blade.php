<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm px-3 py-2 mb-4 border-bottom topbar">
    <div class="container-fluid">

        <!-- Título dinâmico -->
        <h5 class="m-0 fw-semibold flex-grow-1">
            {{ $title }}
        </h5>

        <!-- Área do usuário -->
        <div class="d-flex align-items-center gap-3">
            <span class="text-muted small">
                {{ $userName }}
            </span>
        </div>
    </div>
</nav>