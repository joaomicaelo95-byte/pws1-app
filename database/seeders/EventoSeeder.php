<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("eventos")->insert([
            'titulo' => 'Hackaton ISLA 24h',
            'tipo' => 'Hackathon',
            'data' => '2026-11-25',
            'local' => 'Auditório Principal',
            'descricao' => 'Evento de hackathon com duração de 24 horas.',
            'vagas' => 60,
            'inscritos' => 41,
        ],
        [
            'titulo' => 'Workshop de Laravel',
            'tipo' => 'Workshop',
            'data' => '2026-11-26',
            'local' => 'Auditório Secundário',
            'descricao' => 'Workshop introdutório sobre o framework Laravel.',
            'vagas' => 30,
            'inscritos' => 12,
        ]
        [
            'titulo' => 'Carreiras em Cibersegurança',
            'tipo' => 'Palestra',
            'data' => '2026-11-27',
            'local' => 'Auditório Secundário',
            'descricao' => 'Palestra sobre oportunidades de carreira em cibersegurança.',
            'vagas' => 30,
            'inscritos' => 5,
        ]
        [
            'titulo' => 'Git e GitHub para iniciantes',
            'tipo' => 'Workshop',
            'data' => '2026-12-30',
            'local' => 'Auditório Secundário',
            'descricao' => 'Workshop sobre Git e GitHub para iniciantes.',
            'vagas' => 30,
            'inscritos' => 27,
        ]
        [
            'titulo' => 'Conversa com antigos alunos DWDM',
            'tipo' => 'Palestra',
            'data' => '2026-11-02',
            'local' => 'Sala 0.30',
            'descricao' => 'Palestra com antigos alunos do curso DWDM.',
            'vagas' => 45,
            'inscritos' => 24,
        ]
        );
    }
}
