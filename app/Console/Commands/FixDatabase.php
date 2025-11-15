<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use ReflectionClass;

class FixDatabase extends Command
{
    protected $signature = 'system:fix-db';
    protected $description = 'Corrige UUIDs nulos e verifica/adiciona casts JSON automaticamente nos Models';

    public function handle()
    {
        $this->info("🔧 Iniciando correções do banco e models...\n");

        $this->fixUUIDs();
        $this->fixModelCasts();

        $this->info("\n✅ Finalizado com sucesso!");
    }

    // ---------------------------------------------------------------------
    // 1) CORRIGIR TODOS OS UUIDS NULOS
    // ---------------------------------------------------------------------
    private function fixUUIDs()
    {
        $this->info("📌 Verificando UUIDs faltando...\n");

        $tabelasComUUID = [
            'instrutores',
            'aulas',
            'failed_jobs', // Laravel já usa uuid
        ];

        foreach ($tabelasComUUID as $tabela) {
            if (!DB::getSchemaBuilder()->hasColumn($tabela, 'uuid')) {
                $this->warn("⚠ A tabela {$tabela} não possui coluna uuid, ignorando...");
                continue;
            }

            $faltando = DB::table($tabela)->whereNull('uuid')->count();

            if ($faltando > 0) {
                $this->warn("⚠ {$tabela} possui {$faltando} UUID(s) nulo(s). Corrigindo...");
                DB::table($tabela)->whereNull('uuid')->update([
                    'uuid' => DB::raw('UUID()')
                ]);
                $this->info("✔ UUIDs corrigidos para {$tabela}");
            } else {
                $this->info("✔ {$tabela}: OK");
            }
        }
    }

    // ---------------------------------------------------------------------
    // 2) VERIFICAR E AJUSTAR CASTS JSON AUTOMATICAMENTE
    // ---------------------------------------------------------------------
    private function fixModelCasts()
    {
        $this->info("\n📌 Verificando Models com campos JSON...\n");

        $models = [
            'App\Models\Agendamento',
            'App\Models\Aluno',
            'App\Models\Aula',
            'App\Models\Congelamento',
            'App\Models\ContatoEmergencia',
            'App\Models\Equipamento',
            'App\Models\EvolucaoAluno',
            'App\Models\Instrutor',
            'App\Models\ListaEspera',
            'App\Models\LogAlteracao',
            'App\Models\ManutencaoEquipamento',
            'App\Models\Matricula',
        ];

        foreach ($models as $modelClass) {
            if (!class_exists($modelClass)) {
                $this->warn("⚠ Model não encontrado: $modelClass");
                continue;
            }

            $model = new $modelClass;
            $table = $model->getTable();
            $columns = DB::getSchemaBuilder()->getColumnListing($table);

            $jsonColumns = [];
            foreach ($columns as $col) {
                $type = DB::getSchemaBuilder()->getColumnType($table, $col);
                if ($type === 'json') {
                    $jsonColumns[] = $col;
                }
            }

            if (empty($jsonColumns)) {
                $this->info("✔ {$table}: sem JSON");
                continue;
            }

            $this->warn("\n⚠ Model {$modelClass} — campos JSON detectados:");
            foreach ($jsonColumns as $col) {
                $this->line("   → {$col}");
            }

            $this->updateModelCast($modelClass, $jsonColumns);
        }
    }

    // ---------------------------------------------------------------------
    // 3) Atualiza o arquivo do Model adicionando os casts necessários
    // ---------------------------------------------------------------------
    private function updateModelCast(string $modelClass, array $jsonColumns)
    {
        $reflection = new ReflectionClass($modelClass);
        $path = $reflection->getFileName();
        $content = file_get_contents($path);

        foreach ($jsonColumns as $col) {
            if (str_contains($content, "'{$col}' => 'array'")) {
                continue;
            }

            $content = preg_replace(
                '/protected \$casts = \[(.*?)\];/s',
                "protected \$casts = [\$1\n        '{$col}' => 'array',\n    ];",
                $content
            );
        }

        file_put_contents($path, $content);

        $this->info("✔ Casts adicionados automaticamente em {$modelClass}");
    }
}
