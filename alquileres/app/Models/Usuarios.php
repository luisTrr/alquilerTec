<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Usuarios as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuarios extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'usuarios';
    public $timestamps = false;
    protected $fillable = [
        'nombre', 'correo', 'password', 'celular'
    ];

    public function publicaciones()
    {
        return $this->hasMany(Publicacion::class, 'usuario_id');
    }
}
