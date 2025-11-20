<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RestricaoAluno;
use App\Models\Aluno;
use App\Models\User;

class RestricoesAlunoSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar dependências
        $admin = User::where('role', 'admin')->first();
        $aluno = Aluno::first();

        // Evita quebra caso seeds rodem fora de ordem
        if (!$admin || !$aluno) {
            return;
        }

        RestricaoAluno::updateOrCreate(
            [
                'aluno_id' => $aluno->id,
                'tipo' => 'leve', // chave única recomendada
            ],
            [
                'prioridade' => 'baixa',
                'descricao' => 'Leve desconforto lombar.',
                'criado_por' => $admin->id,
            ]
        );
    }
}
