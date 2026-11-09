@extends('layouts.app')

@section('titulo', 'Início')

@section('conteudo')
    <h1>{{ config('app.name') }}</h1>
    <p>Workshops, palestras e hackathons do ISLA Gaia.</p>
    <p><a href="{{ route('eventos.index') }}" class="btn btn-primary">Ver eventos</a></p>
    
    <h2>Próximos Eventos</h2>
    <ul>
        @forelse ($proximos as $evento)
            <li><a href="{{ route('eventos.show', $evento['id']) }}">{{ $evento['titulo'] }}</a> - {{ date('d/m/Y', strtotime($evento['data'])) }}</li>
        @empty
            <li>Não há próximos eventos.</li>
        @endforelse
    </ul>
@endsection