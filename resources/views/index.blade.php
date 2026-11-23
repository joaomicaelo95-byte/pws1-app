@extends('layouts.app')

@section('titulo', 'Início')

<!-- Desafio: 1 cor por tipo, só nesta página -->
@push('estilos')
    <style>
        .etiqueta-workshop {color: #214caa;}
        .etiqueta-palestra {color: #d99e29;}
        .etiqueta-hackathon {color: #218d1d;}
    </style>
@endpush

@section('conteudo')
    <h1>{{ config('app.name') }}</h1>
    <p>Workshops, palestras e hackathons do ISLA Gaia.</p>
    <p><a href="{{ route('eventos.index') }}" role="button" class="botao">Ver eventos</a></p>
    
    <h2>Eventos por Tipo</h2>
    <ul>
        @foreach ($tipos as $tipo)
            <li>
                <span class="etiqueta-{{ $tipo->slug }}">{{ $tipo->nome }}</span>
                <span>({{ $tipo->eventos_count }} eventos)</span>
            </li>
        @endforeach
    </ul>

    <h2>Próximos Eventos</h2>
    <div class="grelha">
        @forelse ($proximos as $evento)
            <x-cartao-evento :evento="$evento" />
        @empty
            <x-alerta>Ainda não há eventos marcados.</x-alerta>
        @endforelse
    </div>
@endsection