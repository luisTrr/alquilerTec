<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Lista de Publicaciones</h1>
    <a href="{{ route('publicaciones.create') }}" class="btn btn-primary">Crear Publicacion</a>
    <ul>
        @foreach ($publicaciones as $p)
            <li>{{ $p->titulo }} - {{ $p->descripcion }} (Precio: {{ $p->precio }})</li>
        @endforeach
    </ul>
    </div>
</body>
</html>