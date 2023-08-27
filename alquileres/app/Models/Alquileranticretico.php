<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquileranticretico extends Model
{
    protected $table = 'alquileranticretico';

    protected $fillable = [
        'estadoPublicacion'
    ];

    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class, 'alquiler_anticretico_id');
    }
}

