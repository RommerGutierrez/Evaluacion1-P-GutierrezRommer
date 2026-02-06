<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index() {
        $peliculas =\App\Models\Pelicula::all();
        return view('peliculas.index', compact('peliculas'));
    }
}