<?php

use Illuminate\Support\Facades\Route;

$eventos = [
    [
        'id' => 1,
        'titulo' => 'Workshop de Laravel',
        'tipo' => 'workshop',
        'data' => '2026-10-14',
        'local' => 'Laboratório 2.05',
        'vagas' => 20,
        'inscritos' => 12,
    ],
    [
        'id' => 2,
        'titulo' => 'Palestra: Carreiras em Cibersegurança',
        'tipo' => 'palestra',
        'data' => '2026-10-21',
        'local' => 'Auditório',
        'vagas' => 120,
        'inscritos' => 120,
    ],
    [
        'id' => 3,
        'titulo' => 'Hackathon ISLA 24h',
        'tipo' => 'hackathon',
        'data' => '2026-11-06',
        'local' => 'Átrio principal',
        'vagas' => 60,
        'inscritos' => 41,
    ],
    [
        'id' => 4,
        'titulo' => 'Git e GitHub para iniciantes',
        'tipo' => 'workshop',
        'data' => '2026-09-30',
        'local' => 'Laboratório 1.02',
        'vagas' => 25,
        'inscritos' => 25,
    ],
    [
        'id' => 5,
        'titulo' => 'Conversa com antigos alunos DWDM',
        'tipo' => 'palestra',
        'data' => '2026-12-02',
        'local' => 'Sala 3.10',
        'vagas' => 40,
        'inscritos' => 9,
    ],
    [
        'id' => 6,
        'titulo' => 'Palestra: Carreiras em DWDM',
        'tipo' => 'palestra',
        'data' => '2027-01-18',
        'local' => 'Auditório',
        'vagas' => 120,
        'inscritos' => 79,
    ],
];

Route::get('/', function () {
    return view('index');
});

Route::get('/ola', function () {
    return 'Olá mundo';
});

Route::get('/ola/{nome}/{curso}', function (string $nome, String $curso) {
    return e($nome) . " está no curso " . e($curso);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('/saudacao/{nome?}', function (?string $nome = null) {
    return 'Bem-vindo, ' . e($nome ?? 'visitante') . '!';
});

Route::get('/dobro/{num}', function (int $num) {
    return "O dobro de " . e($num) . " é " . e($num *2);
})->whereNumber('num');

Route::get('/perfil', function() {
    return view('perfil', [
            'nome' => 'João Coelho',
            'ano' => 2,
            'curso' => 'DWDM',
            'interesses' => ['Laravel', 'MySQL', 'PHP']
    ]);
});

Route::get('/sobre', function() {
    return view('sobre');
});

Route::get('/eventos', function () use ($eventos) {
    return view('eventos.index', [
        'eventos' => $eventos,
    ]);
});