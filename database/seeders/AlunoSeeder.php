<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Aluno;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Criar usuário para login
        $user = User::create([
            'name' => 'João da Silva',
            'email' => 'joao@example.com',
            'password' => bcrypt('12345678'),
            'role' => 'aluno',
        ]);

        // 2. Criar registro completo do aluno
        Aluno::create([
            'user_id' => $user->id,

            'nome' => 'João da Silva',
            'cpf' => '123.456.789-00',
            'rg' => 'MG-12.345.678',
            'telefone' => '3538120000',
            'celular' => '35988889999',
            'email' => 'joao@example.com',
            'data_nascimento' => '1998-05-20',
            'sexo' => 'masculino',

            'endereco' => 'Rua das Flores, 123',
            'bairro' => 'Centro',
            'cidade' => 'Lavras',
            'estado' => 'MG',
            'cep' => '37200-000',

            'objetivo_principal' => 'Melhorar postura e flexibilidade',
            'nivel_pratica' => 'iniciante',
            'preferencia_instrutor' => 'Maria',
            'foto_url' => null,

            'ativo' => 1,
            'observacoes' => 'Aluno novo na clínica, sem restrições.',
            'criado_por' => 1,
        ]);
    }
}
