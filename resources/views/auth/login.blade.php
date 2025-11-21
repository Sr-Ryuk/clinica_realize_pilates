<x-guest-layout>
    <style>
        /* Inputs com tema Pilates */
        .form-floating>.form-control:focus~label,
        .form-floating>.form-control:not(:placeholder-shown)~label {
            color: #4a7c2a;
            transform: scale(.85) translateY(-0.5rem) translateX(0.15rem);
        }

        .form-control:focus {
            border-color: #4a7c2a;
            box-shadow: 0 0 0 0.25rem rgba(74, 124, 42, 0.15);
        }

        .btn-pilates {
            background: linear-gradient(135deg, #4a7c2a, #2d5016);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-pilates:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(45, 80, 22, 0.3);
            color: white;
        }

        .link-pilates {
            color: #2d5016;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .link-pilates:hover {
            color: #4a7c2a;
            text-decoration: underline;
        }

        .form-check-input:checked {
            background-color: #4a7c2a;
            border-color: #4a7c2a;
        }
    </style>

    @if (session('status'))
    <div class="alert alert-success mb-4 border-0 bg-success bg-opacity-10 text-success" role="alert">
        <i class="bi bi-check-circle me-2"></i> {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror"
                id="email" name="email" placeholder="email@example.com"
                value="{{ old('email') }}" required autofocus autocomplete="username">
            <label for="email"><i class="bi bi-envelope me-1"></i> E-mail</label>
            @error('email')
            <div class="invalid-feedback ps-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                id="password" name="password" placeholder="Senha"
                required autocomplete="current-password">
            <label for="password"><i class="bi bi-lock me-1"></i> Senha</label>
            @error('password')
            <div class="invalid-feedback ps-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                <label class="form-check-label text-muted small" for="remember_me">
                    Lembrar de mim
                </label>
            </div>

            @if (Route::has('password.request'))
            <a class="link-pilates" href="{{ route('password.request') }}">
                Esqueceu a senha?
            </a>
            @endif
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-pilates btn-lg">
                Entrar no Sistema
            </button>
        </div>
    </form>
</x-guest-layout>