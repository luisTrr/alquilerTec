<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PublicacionesCreate</title>
</head>
<body>
    <div style="background:0f1f1f1;widt:45%; height:150px">
    <h1>Crear Anuncio</h1>
    <form action="{{ route('publicaciones.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="opciones_alquiler_id">Opciones de Alquiler</label>
            <select id="opciones_alquiler_id" name="opciones_alquiler_id" class="form-control" required>
                @foreach ($opcionesAlquiler as $OPC)
                    <option value="{{ $OPC->id }}">{{ $OPC->nombre_opcion }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" required>
        </div>
        <!-- <div class="form-group">
            <label for="celular">Celular</label>
            <input type="number" id="celular" name="celular" class="form-control" required>
        </div> -->
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    </div>
</body>
</html>