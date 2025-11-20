@extends('aluno.layouts.app')

@section('title', 'Dashboard')

@section('content')

<h2 class="fw-bold mb-4">Dashboard</h2>

<div class="row g-4">

    <div class="col-12 col-md-4">
        <x-card
            title="Aulas hoje"
            value="0"
            color="primary" />
    </div>

    <div class="col-12 col-md-4">
        <x-card
            title="Mensalidades Pendentes"
            value="0"
            color="danger" />
    </div>

    <div class="col-12 col-md-4">
        <x-card
            title="Aulas Totais Mensais"
            value="0"
            color="success" />
    </div>

</div>

@endsection