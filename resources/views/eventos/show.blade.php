@extends('layouts.app')

@section('titulo', $evento->titulo)

@section('conteudo')
    <p><a href="{{ route('eventos.index') }}" role="button" class="botao">Voltar aos eventos</a></p>
    <h1>Eventos</h1>

    <h2>{{ $evento->titulo }}</h2>
    <!-- Só aparece quando não há vagas disponíveis -->
    @if ($evento->inscritos >= $evento->vagas)
        <x-alerta tipo="aviso">Este evento está esgotado.</x-alerta>
    @endif

    @if ($evento->descricao)
        <p><strong>Descrição:</strong> {{ $evento->descricao }}</p>
    @endif

    <p><strong>Tipo:</strong> {{ $evento->tipo?->nome ?? 'Sem tipo' }}</p>
    <p><strong>Data:</strong> {{ $evento->data->format('d/m/Y') }}</p>
    <p><strong>Local:</strong> {{ $evento->local }}</p>
    <p><strong>Inscritos:</strong> {{ $evento->inscritos }} de {{ $evento->vagas }}</p>
@endsection