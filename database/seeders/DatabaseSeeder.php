<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminUserSeeder::class,

            // básicos
            PlanosSeeder::class,
            SalasSeeder::class,
            InstrutorSeeder::class,
            AlunoSeeder::class,
            MatriculasSeeder::class,

            // operações
            AulasSeeder::class,
            AgendamentosSeeder::class,
            ListaEsperaSeeder::class,

            // equipamentos
            EquipamentosSeeder::class,
            ManutencoesEquipamentosSeeder::class,

            // complementares
            ContatosEmergenciaSeeder::class,
            AnamneseSeeder::class,
            EvolucaoAlunoSeeder::class,
            RestricoesAlunoSeeder::class,
            CongelamentosSeeder::class,
        ]);
    }
}
