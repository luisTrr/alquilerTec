<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicaciones;
use App\Models\Recursos;
use App\Models\Opcionesalquiler;
use App\Models\Alquileranticretico;

class PublicacionesController extends Controller
{
    public function index()
    {
        $publicaciones = Publicaciones::all();
        return view('publicaciones.index', compact('publicaciones'));
    }

    public function create()
    {
        $recursos = Recursos::all();
        $opcionesAlquiler = Opcionesalquiler::all();
        $alquilerAnticretico = Alquileranticretico::all();
        return view('publicaciones.create', compact('recursos', 'opcionesAlquiler', 'alquilerAnticretico'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'titulo' => 'required|max:100',
            'descripcion' => 'required',
            'direccion' => 'required|max:200',
            'precio' => 'required|numeric|min:0',
            //'imagen' => 'required|max:191',
            'opciones_alquiler_id' => 'required|exists:opcionesAlquiler,id',
            //'alquiler_anticretico_id' => 'required|exists:alquilerAnticretico,id',
            //'recursos' => 'required|array',
            //'recursos.*' => 'exists:recursos,id',
        ]);

        // Crear la nueva publicación
        $publicacion = Publicaciones::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            //'usuario_id' => Auth::id(), // Asignar el ID del usuario autenticado
            'direccion' => $request->direccion,
            'precio' => $request->precio,
            //'imagen' => $request->imagen,
            'opciones_alquiler_id' => $request->opciones_alquiler_id,
            //'alquiler_anticretico_id' => $request->alquiler_anticretico_id,
            //'recursos' => $request->recursos,
            //'recursos.*' => $request->recursos.*,
        ]);

        // Asociar recursos a la publicación
        $publicacion->recursos()->attach($request->recursos);

        return redirect()->route('publicaciones.index')->with('success', 'Publicación creada exitosamente');
    }

}
