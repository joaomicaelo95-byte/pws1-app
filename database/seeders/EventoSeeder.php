<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tipo;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tipos = Tipo::pluck('id', 'slug');
        Evento::create([
            'titulo' => 'Workshop de Laravel',
            'tipo_id' => $tipos['workshop'],
            'data' => '2026-11-18',
            'local' => 'Laboratório 2.05',
            'descricao' => 'Aprenda os fundamentos do framework Laravel e como construir aplicações web robustas e escaláveis.',
            'vagas' => 20,
            'inscritos' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Evento::create([
            'titulo' => 'Palestra: Carreiras em Cibersegurança',
            'tipo_id' => $tipos['palestra'],
            'data' => '2026-11-25',
            'local' => 'Auditório',
            'descricao' => 'Conheça as oportunidades de carreira em cibersegurança e como se preparar para entrar nesse mercado em rápido crescimento.',
            'vagas' => 120,
            'inscritos' => 120,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Evento::create([
            'titulo' => 'Hackathon ISLA 24h',
            'tipo_id' => $tipos['hackathon'],
            'data' => '2026-11-06',
            'local' => 'Átrio principal',
            'descricao' => 'Participe do Hackathon ISLA 24h e desenvolva soluções inovadoras em um ambiente colaborativo e desafiador.',
            'vagas' => 60,
            'inscritos' => 41,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Evento::create([
            'titulo' => 'Git e GitHub para iniciantes',
            'tipo_id' => $tipos['workshop'],
            'data' => '2026-12-09',
            'local' => 'Laboratório 1.02',
            'descricao' => 'Aprenda os conceitos básicos de controle de versão com Git e como colaborar em projetos usando GitHub.',
            'vagas' => 25,
            'inscritos' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Evento::create([
            'titulo' => 'Conversa com antigos alunos DWDM',
            'tipo_id' => $tipos['palestra'],
            'data' => '2026-12-02',
            'local' => 'Sala 3.10',
            'descricao' => 'Participe de uma conversa com antigos alunos do curso DWDM e conheça suas experiências e trajetórias profissionais.',
            'vagas' => 40,
            'inscritos' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Evento::create([
            'titulo' => 'Palestra: Carreiras em DWDM',
            'tipo_id' => $tipos['palestra'],
            'data' => '2027-01-18',
            'local' => 'Auditório',
            'descricao' => 'Descubra as oportunidades de carreira no campo de DWDM e como se destacar nesse setor em constante evolução.',
            'vagas' => 120,
            'inscritos' => 79,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
