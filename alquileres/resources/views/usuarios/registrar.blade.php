<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.registrar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo: </label>
            <input type="email" id="correo" name="correo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmar Password: </label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="celular">Celular: </label>
            <input type="text" id="celular" name="celular" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <input type="hidden" name="redirectTo" value="usuarios.principal">
    </form>
    </ul>
    </div>
</body>
</html>