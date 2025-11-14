@extends('admin.layouts.app')

@section('content')

{{-- Classes do Bootstrap: fw-bold (font-weight bold), mb-4 (margin-bottom) --}}
<h2 class="fw-bold mb-4">Dashboard</h2>

{{-- Grid do Bootstrap: row (linha), g-4 (gap) --}}
<div class="row g-4">

    {{-- Colunas do Bootstrap: col-12 (mobile), col-md-4 (desktop) --}}
    <div class="col-12 col-md-3">
        <x-admin.card
            title="Alunos Ativos"
            value="32"
            color="primary" />
    </div>

    <div class="col-12 col-md-3">
        <x-admin.card
            title="Mensalidades Pendentes"
            value="14"
            color="danger" />
    </div>

    <div class="col-12 col-md-3">
        <x-admin.card
            title="Aulas Hoje"
            value="8"
            color="success" />
    </div>

    <div class="col-12 col-md-3">
        <x-admin.card
            title="Faturamento"
            value=" R$ 1000,00"
            color="success" />
    </div>

</div>

@endsection