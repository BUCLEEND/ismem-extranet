<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos', [
    App\Http\Controllers\AlumnosController::class, "listar"
]);
Route::get('/cursos', [
    App\Http\Controllers\CursosController::class, "listar"
]);
Route::get('/notas', [
    App\Http\Controllers\NotasController::class, "listar"
]);
Route::get('/profesores', [
    App\Http\Controllers\ProfesoresController::class, "listar"
]);



