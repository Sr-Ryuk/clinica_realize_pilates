@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<h2 class="fw-bold mb-4">Dashboard</h2>

<div class="row g-4">

    <div class="col-12 col-md-4">
        <x-card
            title="Alunos Ativos"
            value="{{ $alunosAtivos }}"
            color="primary" />
    </div>

    <div class="col-12 col-md-4">
        <x-card
            title="Mensalidades Pendentes"
            value="{{ $mensalidadesAtrasadas }}"
            color="danger" />
    </div>

    <div class="col-12 col-md-4">
        <x-card
            title="Aulas Hoje"
            value="{{ $aulasHoje }}"
            color="success" />
    </div>

</div>

@endsection