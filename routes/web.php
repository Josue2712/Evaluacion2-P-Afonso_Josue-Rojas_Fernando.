<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

// Usar el namespace completo para CursoController
Route::resource('cursos', 'App\Http\Controllers\CursoController');
Route::resource('estudiantes', EstudianteController::class);

Route::get('/', function () {
    return redirect()->route('estudiantes.index');
});