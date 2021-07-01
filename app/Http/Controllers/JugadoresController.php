<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    private $jugadores = array(
        array(
            'foto' => 'http://ximg.es/60x70/000/fff',
            'nombre' => 'Francisco Perez',
            'posicion' => 'Delantero',
            'numero' => '8',
            'equipo' => 'Once Caldas',
        ),
        array(
            'foto' => 'http://ximg.es/60x70/000/fff',
            'nombre' => 'Mario Perez',
            'posicion' => 'Defensa',
            'numero' => '4',
            'equipo' => 'Nacional',
        ),
        array(
            'foto' => 'http://ximg.es/60x70/000/fff',
            'nombre' => 'Ramiro Suan',
            'posicion' => 'Arquero',
            'numero' => '3',
            'equipo' => 'Millonarios',
        ),
        array(
            'foto' => 'http://ximg.es/60x70/000/fff',
            'nombre' => 'Camilo Marin',
            'posicion' => 'Delantero',
            'numero' => '7',
            'equipo' => 'Once Caldas',
        ),
        array(
            'foto' => 'http://ximg.es/60x70/000/fff',
            'nombre' => 'Robinson Fernandez',
            'posicion' => 'Defensa',
            'numero' => '12',
            'equipo' => 'Nacional',
        )
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jugadores.index')->with('jugadores', $this->jugadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jugadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('jugadores.show')
            ->with('id', $id)
            ->with('jugador', $this->jugadores[$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('jugadores.show')->with('id', $id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
