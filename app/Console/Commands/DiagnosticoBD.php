<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\File;

class DiagnosticoBD extends Command
{
    protected $signature = 'diagnostico:bd';
    protected $description = 'Verifica tabelas, colunas, foreign keys, casts e modelos do sistema';

    public function handle()
    {
        $this->info("🔍 Iniciando diagnóstico do banco...\n");

        $this->checkTables();
        $this->checkForeignKeys();
        $this->checkModelsCasts();
        $this->checkUuidColumns();

        $this->info("\n✅ Diagnóstico finalizado com sucesso.\n");

        return Command::SUCCESS;
    }

    private function checkTables()
    {
        $this->info("📌 Verificando tabelas existentes...\n");

        $tables = DB::select('SHOW TABLES');
        $tables = array_map('current', $tables);

        $expected = [
            'users',
            'password_reset_tokens',
            'sessions',
            'cache',
            'cache_locks',
            'failed_jobs',
            'jobs',
            'job_batches',
            'alunos',
            'instrutores',
            'planos',
            'matriculas',
            'mensalidades',
            'aulas',
            'salas',
            'agendamentos',
            'lista_espera',
            'restricoes_aluno',
            'congelamentos',
            'equipamentos',
            'manutencoes_equipamentos',
            'anamnese',
            'evolucao_aluno',
            'logs_alteracoes',
            'notificacoes',
            'contatos_emergencia',
            'migrations'
        ];

        $missing = array_diff($expected, $tables);

        if (empty($missing)) {
            $this->info("✔ Todas as tabelas obrigatórias estão presentes.\n");
        } else {
            $this->error("❌ Tabelas faltando:");
            foreach ($missing as $t) $this->error(" - $t");
        }
    }

    private function checkForeignKeys()
    {
        $this->info("📌 Verificando integridade de Foreign Keys...\n");

        $fkErrors = DB::select("SHOW ENGINE INNODB STATUS");
        $report = $fkErrors[0]->Status ?? '';

        if (str_contains($report, 'LATEST FOREIGN KEY ERROR')) {
            $this->error("❌ Foram encontrados erros de Foreign Keys!");
        } else {
            $this->info("✔ Nenhum erro de Foreign Keys detectado.\n");
        }
    }

    private function checkModelsCasts()
    {
        $this->info("📌 Verificando casts JSON nos Models...\n");

        $models = File::allFiles(app_path('Models'));

        foreach ($models as $modelFile) {
            $content = File::get($modelFile->getPathname());
            $modelName = $modelFile->getFilenameWithoutExtension();

            preg_match_all('/\$casts\s*=\s*\[([^\]]*)\]/', $content, $matches);

            if (empty($matches[1])) {
                $this->warn("⚠ O model $modelName NÃO possui casts definidos.");
                continue;
            }

            if (!str_contains($matches[1][0], 'array')) {
                $this->warn("⚠ O model $modelName pode possuir JSON sem cast.");
            } else {
                $this->info("✔ Casts OK para JSON no model $modelName.");
            }
        }

        $this->line("");
    }

    private function checkUuidColumns()
    {
        $this->info("📌 Verificando colunas UUID nulas...\n");

        $tables = [
            'instrutores',
            'aulas',
            'failed_jobs'
        ];

        foreach ($tables as $table) {
            if (!Schema::hasColumn($table, 'uuid')) continue;

            $countNull = DB::table($table)->whereNull('uuid')->count();

            if ($countNull > 0) {
                $this->warn("⚠ $table possui $countNull registros com UUID nulo.");
            } else {
                $this->info("✔ $table com UUIDs preenchidos corretamente.");
            }
        }

        $this->line("");
    }
}
