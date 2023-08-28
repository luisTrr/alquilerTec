<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Lista de Publicaciones</h1>
    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Publicacion</a>
    <ul>
        @foreach ($publicaciones as $p)
            <li>{{ $p->titulo }} - {{ $p->descripcion }} (Precio: {{ $p->precio }})</li>
        @endforeach
    </ul>
    </div>
</body>
</html>
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Ingresar</h1>
    <button href="{{ route('usuarios.create') }}" type="submit" class="btn btn-primary">Registrar</button>
    <form action="{{ route('usuarios.ingresar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="correo">Correo</label>
            <input type="email" id="correo" name="correo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
    </ul>
    </div>
</body>
</html>