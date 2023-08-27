<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    protected $table = 'recursos';

    public $timestamps = false;

    protected $fillable = [
        'aguaCaliente', 'wifi', 'gasDomiciliario', 'mascotas', 'luz', 'agua', 'residenciaAdventista', 'horaDeLlegada'
    ];

    public function publicaciones()
    {
        return $this->belongsToMany(Publicacion::class, 'publicacion_recursos', 'recurso_id', 'publicacion_id');
    }
}
