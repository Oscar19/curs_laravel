<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/equipos', [EquipoController::class, 'index']);
Route::get('/equipos/create', [EquipoController::class, 'create']);
Route::post('/equipos', [EquipoController::class, 'store']);
Route::get('/equipos/{equipo}', [EquipoController::class, 'show']);
Route::get('/equipos/{equipo}/editar', [EquipoController::class, 'edit']);
Route::put('/equipos/{equipo}', [EquipoController::class, 'update']);
Route::delete('/equipos/{equipo}', [EquipoController::class, 'destroy']);
//partidos
Route::get('/partidos', [PartidoController::class, 'index']);
Route::get('/partidos/create', [PartidoController::class, 'create']);
Route::post('/partidos', [PartidoController::class, 'store']);
Route::get('/partidos/{partido}', [PartidoController::class, 'show']);
Route::get('/partidos/{partido}/editar', [PartidoController::class, 'edit']);
Route::put('/partidos/{partido}', [PartidoController::class, 'update']);
Route::delete('/partidos/{partido}', [PartidoController::class, 'destroy']);



