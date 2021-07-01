@extends('layouts.base')

@section('title', 'Lisado Jugadores')
    
@section('content')
    <br>
    <h1>Jugadores</h1>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">Nombre</th>
            <th scope="col">Posicion</th>
            <th scope="col" class="text-center">Número</th>
            <th scope="col">Equipo</th>
            <th scope="col">Acción</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($jugadores as $key=>$jugador)
            <tr>
                <th><img src="{{ $jugador['foto'] }}" alt=""></th>
                <td>{{ $jugador['nombre']}}</td>
                <td>{{ $jugador['posicion']}}</td>
                <td class="text-center">{{ $jugador['numero']}}</td>
                <td>{{ $jugador['equipo']}}</td>
                <td>
                    <a href="/jugadores/{{ $key }}" class="btn btn-success">Ver</a>
                    <a href="#" class="btn btn-warning">Modificar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </td>
              </tr> 
            @endforeach
      </table>
@endsection