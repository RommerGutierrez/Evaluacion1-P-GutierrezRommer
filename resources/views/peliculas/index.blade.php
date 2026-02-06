<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Peliculas</title>
</head>
<body>
    <h1>Lista de Películas</h1>
    @forelse ($peliculas as $pelicula)
        @if ($loop->first)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Duración (min)</th>
                        <th>Calificación</th>
                        <th>Estreno</th>
                    </tr>
                </thead>
                <tbody>
                    @endif
                    <tr>
                        <td>{{ $pelicula->titulo }}</td>
                        <td>{{ $pelicula->duracionMinutos }} min</td>
                        <td>{{ $pelicula->calificacion }} / 10</td>
                        <td>{{ $pelicula->estreno }}</td>
                    </tr>
                    @if ($loop->last)
                </tbody>
            </table>
        @endif

    @empty
        <div class="alert alert-info" role="alert">
            <strong>Aviso:</strong> No hay películas registradas.
        </div>
    @endforelse
</body>
</html>