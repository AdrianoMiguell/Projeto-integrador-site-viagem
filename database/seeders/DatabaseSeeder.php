<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ImagemCidade;
use App\Models\Viagem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            EstadoSeeder::class,
            CidadeSeeder::class,
            ViagemSeeder::class,
            ImagemCidadeSeeder::class,
            PontoTuristicoSeeder::class,
            ImagemTuristicaSeeder::class,
        ]);
    }
}
