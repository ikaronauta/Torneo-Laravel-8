@extends('layouts.base')

@section('title', 'Listado Equipos')
    
@section('content')
    <h1>Equipos</h1>
    <div class="row">
        @foreach ($equipos as $key=>$equipo)
            <div class="col 3 text-center">
                <a href="/equipos/{{ $key }}">
                    <img src="{{ $equipo['escudo'] }}">
                    <h4>{{ $equipo['nombre'] }}</h4>
                </a>
            </div>
        @endforeach
    </div>
@endsection