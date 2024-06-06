<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\JaiderController;
use App\Http\Controllers\DiazController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jaider', function () {
    return 'Mi Nombre es  jaider Diaz';
});

Route::resource('/carros', CarroController::class,);

Route::resource('/programas',DiazController::class,);

Route::get('/diaz', [JaiderController::class, 'jaiderd']);

Route::get('/saludo', [SaludoController::class, 'saludito']);

Route::resource('/cursos', CursoController::class);


