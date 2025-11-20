<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EvolucaoAluno;
use App\Models\Aluno;
use App\Models\Instrutor;
use App\Models\User;

class EvolucaoAlunoSeeder extends Seeder
{
    public function run(): void
    {
        // Buscar admin real
        $admin = User::where('role', 'admin')->first();

        // Buscar aluno e instrutor
        $aluno = Aluno::first();
        $instrutor = Instrutor::first();

        // Evitar crash caso seeds rodem fora de ordem
        if (!$aluno || !$instrutor || !$admin) {
            return;
        }

        // Criar ou atualizar evolução inicial
        EvolucaoAluno::updateOrCreate(
            [
                'aluno_id' => $aluno->id,
                'tipo_avaliacao' => 'inicial',
            ],
            [
                'instrutor_id' => $instrutor->id,
                'peso' => 68.5,
                'altura' => 1.72,
                'observacoes_instrutor' => 'Bom alinhamento postural.',
                'criado_por' => $admin->id,
            ]
        );
    }
}
