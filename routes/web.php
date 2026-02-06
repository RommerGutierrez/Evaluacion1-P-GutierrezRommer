<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculaController;
use App\Models\Pelicula;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('peliculas', PeliculaController::class);