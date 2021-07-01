@extends('layouts.base')

@section('title', 'Crear Equipo ')
    
@section('content')
    <h1>Crear equipo</h1>
    <form action="/equipos" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del equipo</label>
            <input type="text" class="form-control" id="nombre" name="nombre"">
        </div>

        <div class="form-group">
            <label for="dt">Director tecnico</label>
            <input type="text" class="form-control" id="dt" name="dt"">
        </div>

        <div class="form-group">
            <label for="municipio">Municipio</label>
            <select class="form-control" id="municipio" name="municipio">
              <option>Manizales</option>
              <option>Pereira</option>
              <option>Armenia</option>
            </select>
        </div>

        <div class="form-group">
            <label for="escudo">Escudo</label>
            <input type="file" class="form-control-file" id="escudo" name="escudo">
        </div>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
@endsection