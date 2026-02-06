<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelicula::create([
            'titulo' => 'Inception',
            'duracionMinutos' => 148,
            'calificacion' => 8.8,
            'estreno' => '2010-07-16',
        ]);
        Pelicula::create([
            'titulo' => 'The Godfather',
            'duracionMinutos' => 175,
            'calificacion' => 9.2,
            'estreno' => '1972-03-24',
        ]);
        Pelicula::create([
            'titulo' => 'Spider-Man: Across the Spider-Verse',
            'duracionMinutos' => 140,
            'calificacion' => 8.7,
            'estreno' => '2023-06-02',
        ]);
    }
}
