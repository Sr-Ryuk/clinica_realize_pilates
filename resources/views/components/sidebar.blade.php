<aside id="sidebar" class="sidebar collapsed d-flex flex-column">


    <nav class="nav flex-column">

        {{-- Botão toggle alinhado como item da sidebar --}}
        <button id="toggleSidebar"
            class="nav-link sidebar-btn w-100 d-flex align-items-center gap-2 py-2 text-start border-0 bg-transparent">
            <i class="bi bi-list fs-5"></i>
            <span class="sidebar-text">Menu</span>
        </button>

        @foreach ($items as $item)
        <a href="{{ $item['url'] }}"
            class="nav-link d-flex align-items-center gap-2 py-2"
            data-bs-toggle="tooltip"
            data-bs-title="{{ $item['label'] }}">
            <i class="bi {{ $item['icon'] }} fs-5"></i>
            <span class="sidebar-text">{{ $item['label'] }}</span>
        </a>
        @endforeach

    </nav>

    <form method="POST" action="{{ route('logout') }}" class="mt-auto">
        @csrf
        <button class="btn btn-danger w-100 mt-3 d-flex align-items-center justify-content-center gap-2">
            <i class="bi bi-box-arrow-right"></i>
            <span class="sidebar-text">Sair</span>
        </button>
    </form>

</aside>