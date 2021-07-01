@extends('layouts.base')

@section('title', 'Crear Jugador ')
    
@section('content')
    <h1>Crear jugador</h1>
    <form action="/jugadores" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del jugador</label>
            <input type="text" class="form-control" id="nombre" name="nombre"">
        </div>

        <div class="form-group">
            <label for="posicion">Posicion</label>
            <select class="form-control" id="posicion" name="posicion">
              <option>Delantero</option>
              <option>Defensa</option>
              <option>Arquero</option>
            </select>
        </div>

        <div class="form-group">
            <label for="numero">Número</label>
            <input type="number" class="form-control" id="numero" name="numero"">
        </div>

        <div class="form-group">
            <label for="equipo">Equipo</label>
            <select class="form-control" id="equipo" name="equipo">
              <option>Once Caldas</option>
              <option>Nacional</option>
              <option>Millonarios</option>
            </select>
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
@endsection