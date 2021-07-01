@extends('layouts.base')

@section('title', 'Show')
    
@section('content')
    <h1>Detalle equipo {{$id}}</h1>
    <div class="row">
        <div class="col-sm-4">
            <img src="{{ $equipo['escudo'] }}">
        </div>
        <div class="col-sm-8">
            <div class="h3">{{ $equipo['nombre'] }}</div>
            <div class="h5">{{ $equipo['dt'] }}</div>
            <div class="h6">{{ $equipo['municipio'] }}</div>
            <a href="#" class="btn btn-danger">Eliminar</a>
            <a href="/equipos/{{ $id }}" class="btn btn-warning">Modificar</a>
            <a href="/equipos" class="btn btn-outline-dark">Ver equipos</a>
        </div>
    </div>
@endsection
