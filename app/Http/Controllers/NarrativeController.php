<?php

namespace App\Http\Controllers;

use App\Models\Narrative;
use Illuminate\Support\Facades\Storage;


class NarrativeController extends Controller
{

    
    public function index()
    {
        // Obtiene todas las narrativas desde la base de datos
        $narratives = Narrative::all();

        // Retorna la vista 'narratives' con la variable $narratives
        return view('Cuentos', compact('narratives'));
    }

    public function show($id)
    {
        // Buscar la narrativa por su ID
        $narrative = Narrative::with('content')->findOrFail($id);

        return view('leyendas', compact('narrative'));
    }

}

