<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquileranticretico;

class AlquileranticreticoController extends Controller
{
    public function index()
    {
        $alquilerAnticretico = Alquileranticretico::all();
        return view('alquilerAnticretico.index', compact('alquilerAnticretico'));
    }
}
