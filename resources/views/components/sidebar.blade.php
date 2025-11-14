<aside class="sidebar d-flex flex-column">

    <h3 class="fw-bold mb-4">Realize Pilates</h3>

    <nav class="nav flex-column">

        @foreach ($items as $item)
        <a href="{{ $item['url'] }}"
            class="nav-link d-flex align-items-center gap-2">
            <i class="bi {{ $item['icon'] }}"></i>
            {{ $item['label'] }}
        </a>
        @endforeach

    </nav>

    <form method="POST" action="{{ route('logout') }}" class="mt-auto">
        @csrf
        <button class="btn btn-danger w-100 mt-3">Sair</button>
    </form>

</aside>