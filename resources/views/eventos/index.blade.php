@extends('layouts.app')

@section('titulo', 'Eventos')

@section('conteudo')
    <p><a href="/" role="button" class="botao">Voltar ao início</a></p>
    <h1>Eventos @if ($tipo) - {{ ucfirst($tipo) }}@endif</h1>
    <hr>
    <div class="grid">
        <div>
            <p><a href="{{ route('eventos.index') }}">Todos os eventos</a></p>
            <p><a href="{{ route('eventos.index', ['disponibilidade' => 'disponiveis']) }}">Disponíveis</a></p>
        </div>
        <div>
            <p><a href="{{ route('eventos.index', ['tipo' => 'workshop']) }}">Workshops</a></p>
            <p><a href="{{ route('eventos.index', ['disponibilidade' => 'esgotados']) }}">Esgotados</a></p>
        </div>
        <div>
            <p><a href="{{ route('eventos.index', ['tipo' => 'palestra']) }}">Palestras</a></p>
            <p><a href="{{ route('eventos.proximos') }}">Próximos eventos</a></p>
        </div>
        <div>
            @foreach ($tipos as $tipoFiltro)
                <p><a href="{{ route('eventos.index', ['tipo' => $tipoFiltro->slug]) }}">{{ $tipoFiltro->nome }}</a></p>
            @endforeach
        </div>
    </div>
    <hr>

    @if ($eventos->isEmpty())
        <x-alerta tipo="aviso">Não há eventos para mostrar.</x-alerta>
    @else
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Data</th>
                    <th scope="col">Vagas disponíveis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('eventos.show', $evento->id) }}">{{ $evento->titulo }}</a></td>
                        <td>{{ $evento->data->format('d/m/Y') }}</td>
                        @if ($evento->inscritos >= $evento->vagas)
                            <td><strong>Esgotado</strong></td>
                        @else
                            <td>{{ $evento->vagas - $evento->inscritos }}</td>
                        @endif
                    </tr> 
                @endforeach
            </tbody>
        </table>
    @endif
@endsection