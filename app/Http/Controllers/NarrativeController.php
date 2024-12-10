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

    public function indexCRUD()
{
    $narratives = Narrative::with('content', 'exercises')->get();
    return view('CRUD', compact('narratives'));
}

public function create()
    {
        return view('CRUDCrear');
    }

    /**
     * Guarda una nueva historia.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('narratives', 'public');

        Narrative::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('CRUD')->with('success', 'Historia creada exitosamente.');
    }

    /**
     * Muestra el formulario para editar una historia.
     */
    public function edit(Narrative $narrative)
    {
        return view('CRUDEditar', compact('narrative'));
    }

    /**
     * Actualiza una historia existente.
     */
    public function update(Request $request, Narrative $narrative)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior
            if ($narrative->image && Storage::exists('public/' . $narrative->image)) {
                Storage::delete('public/' . $narrative->image);
            }

            $imagePath = $request->file('image')->store('narratives', 'public');
            $narrative->image = $imagePath;
        }

        $narrative->update($request->only('name', 'description'));

        return redirect()->route('CRUD')->with('success', 'Historia actualizada exitosamente.');
    }

    /**
     * Elimina una historia.
     */
    public function destroy(Narrative $narrative)
    {
       
        $narrative->delete();

        return redirect()->route('CRUD')->with('success', 'Historia eliminada exitosamente.');
    }
}

