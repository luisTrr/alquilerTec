<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opcionesalquiler;
class OpcionesalquilerController extends Controller
{
    public function index()
    {
        $opcionesAlquiler = Opcionesalquiler::all();
        return view('opcionesAlquiler.index', compact('opcionesAlquiler'));
    }
}
