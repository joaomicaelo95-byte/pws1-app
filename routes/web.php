<?php

use Illuminate\Support\Facades\Route;

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