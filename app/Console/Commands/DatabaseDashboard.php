<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseDashboard extends Command
{
    protected $signature = 'system:db-dashboard';
    protected $description = 'Exibe um painel geral com métricas do banco da clínica Pilates';

    public function handle()
    {
        $this->info("📊 Painel Geral do Banco — Clínica Pilates\n");

        $hoje = Carbon::today();

        // --- ALUNOS ---
        $alunosAtivos = DB::table('alunos')->where('ativo', 1)->count();
        $totalAlunos = DB::table('alunos')->count();

        // --- INSTRUTORES ---
        $instrutoresAtivos = DB::table('instrutores')->where('ativo', 1)->count();
        $totalInstrutores = DB::table('instrutores')->count();

        // --- AULAS ---
        $aulasHoje = DB::table('aulas')->whereDate('data_aula', $hoje)->count();
        $aulasFuturas = DB::table('aulas')->whereDate('data_aula', '>', $hoje)->count();

        // --- AGENDAMENTOS ---
        $agendamentosHoje = DB::table('agendamentos')->whereDate('created_at', $hoje)->count();
        $agendamentosPendentes = DB::table('agendamentos')->where('status', 'pendente')->count();

        // --- MATRÍCULAS ---
        $matriculasAtivas = DB::table('matriculas')->where('status', 'ativa')->count();
        $matriculasSuspensas = DB::table('matriculas')->where('status', 'suspensa')->count();
        $matriculasCanceladas = DB::table('matriculas')->where('status', 'cancelada')->count();

        // --- MENSALIDADES ---
        $mensalidadesAtrasadas = DB::table('mensalidades')
            ->whereNull('data_pagamento')
            ->where('data_vencimento', '<', $hoje)
            ->count();

        $mensalidadesDoMes = DB::table('mensalidades')
            ->whereMonth('data_vencimento', $hoje->month)
            ->count();

        // --- EQUIPAMENTOS ---
        $equipamentosAtivos = DB::table('equipamentos')->where('ativo', 1)->count();
        $manutencoesPendentes = DB::table('manutencoes_equipamentos')
            ->whereDate('proxima_manutencao', '<=', $hoje)
            ->count();

        // --- LISTA DE ESPERA ---
        $filaEspera = DB::table('lista_espera')->where('status', 'aguardando')->count();

        // --- NOTIFICAÇÕES ---
        $notificacoesNaoLidas = DB::table('notificacoes')->where('lida', 0)->count();

        // --- LOGS ---
        $logsHoje = DB::table('logs_alteracoes')->whereDate('data_alteracao', $hoje)->count();

        // ====== EXIBIÇÃO ======
        $this->table(
            ['Indicador', 'Valor'],
            [
                ['Alunos Ativos', $alunosAtivos],
                ['Total de Alunos', $totalAlunos],
                ['Instrutores Ativos', $instrutoresAtivos],
                ['Total de Instrutores', $totalInstrutores],
                ['Aulas Hoje', $aulasHoje],
                ['Aulas Futuras', $aulasFuturas],
                ['Agendamentos Hoje', $agendamentosHoje],
                ['Agendamentos Pendentes', $agendamentosPendentes],
                ['Matrículas Ativas', $matriculasAtivas],
                ['Matrículas Suspensas', $matriculasSuspensas],
                ['Matrículas Canceladas', $matriculasCanceladas],
                ['Mensalidades Atrasadas', $mensalidadesAtrasadas],
                ['Mensalidades do Mês', $mensalidadesDoMes],
                ['Equipamentos Ativos', $equipamentosAtivos],
                ['Manutenções Pendentes', $manutencoesPendentes],
                ['Na Fila de Espera', $filaEspera],
                ['Notificações Não Lidas', $notificacoesNaoLidas],
                ['Logs Hoje', $logsHoje],
            ]
        );

        $this->info("\n✅ Dashboard gerado com sucesso!");
        return Command::SUCCESS;
    }
}
