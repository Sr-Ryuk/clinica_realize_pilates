<h1>Painel do INSTRUTOR</h1>
<p>Bem-vindo ao sistema!</p>

<form action="{{ route('logout') }}" method="POST" style="margin-top: 20px;">
    @csrf
    <button type="submit" class="btn btn-danger">Sair</button>
</form>