<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    use HasFactory;
    protected $table = 'publicaciones';

    protected $fillable = [
        'titulo', 'descripcion', 'usuario_id', 'direccion', 'precio', 'imagen', 'opciones_alquiler_id', 'alquiler_anticretico_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuario_id');
    }

    public function recursos()
    {
        return $this->belongsToMany(Recursos::class, 'publicacion_recursos', 'publicacion_id', 'recurso_id');
    }

    public function opcionesAlquiler()
    {
        return $this->belongsTo(Opcionalquiler::class, 'opciones_alquiler_id');
    }

    public function alquileranticretico()
    {
        return $this->belongsTo(Alquileranticretico::class, 'alquiler_anticretico_id');
    }
}

