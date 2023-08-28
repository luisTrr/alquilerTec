<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticia</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Lista de Tipos de Alquiler</h1>
    <a href="{{ route('tipos-alquiler.create') }}" class="btn btn-primary">Crear Tipo de Alquiler</a>
    <ul>
        @foreach ($opcionesAlquiler as $opcionesAlquilers)
            <li>{{ $opcionesAlquilers->nombre_opcion }}</li>
        @endforeach
    </ul>
    </div>
</body>
</html>