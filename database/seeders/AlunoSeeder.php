<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        // Administrador que será atribuído ao campo criado_por
        $admin = User::where('role', 'admin')->first();

        // Garantir que o usuário do aluno existe
        $user = User::updateOrCreate(
            ['email' => 'joao@example.com'],
            [
                'name' => 'João da Silva',
                'password' => Hash::make('12345678'),
                'role' => 'aluno',
                'email_verified_at' => now(),
            ]
        );

        // Criar ou atualizar o registro do aluno
        Aluno::updateOrCreate(
            ['user_id' => $user->id],
            [
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
                'criado_por' => $admin?->id ?? 1,
            ]
        );
    }
}
