<?php

namespace App\Http\Controllers;

use App\Models\Narrative;

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

    public function indexCRUD()
{
    $narratives = Narrative::with('content', 'exercises')->get();
    return view('CRUD', compact('narratives'));
}

public function create()
{
    return view('CRUD_Cuestionario');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'required|image',
    ]);

    $narrative = Narrative::create($validated);
    return redirect()->route('CRUD');
}

// Otros métodos: edit(), update(), destroy()...

}

