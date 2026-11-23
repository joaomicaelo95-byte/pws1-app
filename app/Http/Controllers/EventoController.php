<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\View\View;
// use Illuminate\Support\Facades\DB;
use App\Models\Tipo;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {

        $tipo = $request->query('tipo');
        $disponibilidade = $request->query('disponibilidade');

        $eventos = Evento::query()
            ->when($tipo, fn ($consulta) => $consulta->whereRelation('tipo', 'slug', $tipo))
            ->when($disponibilidade === 'esgotados', fn ($consulta) => $consulta->whereColumn('inscritos', '>=', 'vagas'))
            ->when($disponibilidade === 'disponiveis', fn ($consulta) => $consulta->whereColumn('inscritos', '<', 'vagas'))
            ->orderBy('data')
            ->get();

        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => $tipo,
            'disponibilidade' => $disponibilidade,
            'tipos' => Tipo::orderBy('nome')->get(),
        ]);
    }

    public function proximos(): View
    {
        $eventos = Evento::query()
            ->where('data', '>=', now()->toDateString())
            ->orderBy('data')
            ->get();

        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => null,
            'disponibilidade' => null,
            'tipos' => Tipo::orderBy('nome')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Evento $evento): View
    {
        return view('eventos.show', ['evento' => $evento]);
    }

    public function porTipo(string $tipo): view
    {
        $eventos = Evento::query()
            ->whereRelation('tipo', 'slug', $tipo)
            ->orderBy('data')
            ->get();

        if($eventos->isEmpty()) {
            abort(404);
        }

        // Mostrar apenas os eventos do tipo pedido
        return view('eventos.index', [
            'eventos' => $eventos,
            'tipo' => $tipo,
            'disponibilidade' => null,
            'tipos' => Tipo::orderBy('nome')->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
