<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosAleatoriosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventos = [];

        for ($i = 1; $i <= 20; $i++) {
            // Primeiro as vagas, depois os inscritos os inscritos entre 0 e o número de vagas
            $vagas = fake()->numberBetween(10, 100);
            $eventos[] = [
                'titulo' => ucfirst(fake()->words(3, true)),
                'tipo' => fake()->randomElement(['workshop', 'palestra', 'hackathon']),
                'data' => fake()->dateTimeBetween('now', '+3 months')->format('Y-m-d'),
                'local' => fake()->randomElement(['Auditório', 'Laboratório 1.02', 'Laboratório 2.05', 'Átrio principal']),
                'vagas' => $vagas,
                'inscritos' => fake()->numberBetween(0, $vagas),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('eventos')->insert($eventos);
    }
}