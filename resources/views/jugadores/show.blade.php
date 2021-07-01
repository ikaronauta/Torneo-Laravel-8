@extends('layouts.base')

@section('title', 'Show')
    
@section('content')
    <h1>Detalle jugador {{$id}}</h1>
    <div class="row">
        <div class="col-sm-1 m-auto">
            <img src="{{ $jugador['foto'] }}">
        </div>
        <div class="col-sm-10">
            <div class="h3">{{ $jugador['nombre'] }}</div>
            <div class="h5">{{ $jugador['posicion'] }}</div>
            <div class="h6">{{ $jugador['equipo'] }}</div>
            <a href="#" class="btn btn-danger">Eliminar</a>
            <a href="/jugadores/{{ $id }}" class="btn btn-warning">Modificar</a>
            <a href="/jugadores" class="btn btn-outline-dark">Ver jugadores</a>
        </div>
    </div>
@endsection