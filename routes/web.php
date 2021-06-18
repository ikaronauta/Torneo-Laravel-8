<?php

use App\Http\Controllers\EquiposController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\MunicipiosController;
use App\Http\Controllers\PosicionesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InicioController::class, 'index']);

Route::resource('municipios', MunicipiosController::class);

Route::resource('equipos', EquiposController::class);

Route::resource('jugadores', JugadoresController::class);

Route::resource('posiciones', PosicionesController::class);
