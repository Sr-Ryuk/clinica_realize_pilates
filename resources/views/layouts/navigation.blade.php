{{--
  Navbar do Bootstrap 5:
  - navbar: Classe principal
  - navbar-expand-lg: Expande o menu em telas grandes (desktop)
  - navbar-light: Esquema de cores claro (pode usar navbar-dark + bg-dark para modo escuro)
  - bg-white: Cor de fundo
  - shadow: Adiciona uma sombra
--}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container-fluid">

        <a class="navbar-brand me-4" href="{{ route('dashboard') }}">
            {{-- Aqui você pode manter o x-application-logo se ele for um SVG simples --}}
            <x-application-logo class="d-inline-block align-text-top" style="width: 36px; height: 36px;" />
            {{ config('app.name', 'Laravel') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                {{-- Verifica se a rota é a ativa para adicionar a classe 'active' do Bootstrap --}}
                <li class="nav-item">
                    <a class="nav-link @if (request()->routeIs('dashboard')) active fw-bold @endif"
                        aria-current="@if (request()->routeIs('dashboard')) page @endif"
                        href="{{ route('dashboard') }}">
                        {{ __('Dashboard') }}
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    {{-- O link do dropdown --}}
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    {{-- Menu do dropdown --}}
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        {{-- Link do Perfil --}}
                        <li>
                            <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                {{ __('Profile') }}
                            </a>
                        </li>

                        {{-- Logout --}}
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>