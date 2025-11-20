<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Aula;
use App\Models\Mensalidade;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $hoje = Carbon::today();
        $alunosAtivos = Aluno::where('ativo', 1)->count();
        $mensalidadesAtrasadas = Mensalidade::where('data_vencimento', '<', $hoje)
            ->whereNull('data_pagamento')
            ->count();
        $aulasHoje = Aula::whereDate('data_aula', $hoje)->count();

        return view('admin.dashboard', compact('alunosAtivos', 'mensalidadesAtrasadas', 'aulasHoje'));
    }
}
