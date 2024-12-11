<?php

namespace App\Http\Controllers;

use App\Models\Narrative;
use App\Models\NarrativeContent;
use App\Models\Exercise;
use Illuminate\Http\Request;
use App\Models\Category; 
use App\Models\Progress; //Importar el modelo de categorías



class NarrativeController2 extends Controller
{
    public function index()
    {
        $narratives = Narrative::with(['content', 'exercises'])->get();
        return view('narratives.index', compact('narratives'));
    }

   
public function create()
{
    $categories = Category::all(); // Obtener todas las categorías
    return view('narratives.create', compact('categories'));
}


public function store(Request $request)
{
    // Validación
    $validated = $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'required|string',
        'text' => 'required|string',
        'video_url' => 'nullable|string',
        'questions.*.question' => 'required|string',
        'questions.*.options' => 'required|string',
        'questions.*.correct_option' => 'required|integer|min:0',
    ]);

    // Crear la narrativa
    $narrative = Narrative::create([
        'category_id' => $validated['category_id'],
        'name' => $validated['name'],
        'description' => $validated['description'],
        'image' => $validated['image'],
    ]);

    // Crear el contenido relacionado
    NarrativeContent::create([
        'narrative_id' => $narrative->id,
        'text' => $validated['text'],
        'video_url' => $validated['video_url'],
    ]);

    $exerciseQuestions = [];

    foreach ($validated['questions'] as $questionData) {
        // Convertir las opciones a un array de cadenas
        $options = explode(',', $questionData['options']);
        
        // Asegurarse de que el índice de la opción correcta sea válido
        $correctOptionIndex = (int)$questionData['correct_option'];
    
        if ($correctOptionIndex >= 0 && $correctOptionIndex < count($options)) {
            $exerciseQuestions[] = [
                'question' => $questionData['question'],
                'options' => $options,
                'correct_option' => $correctOptionIndex  // Guardar como índice
            ];
        }
    }
    
    // Guardar las preguntas en formato JSON
    $exercise = Exercise::create([
        'narrative_id' => $narrative->id,
        'title' => 'Exercise for ' . $validated['name'],
        'description' => 'Description for ' . $validated['name'],
        'questions' => json_encode($exerciseQuestions),  // Guardar las preguntas como JSON
    ]);
    

    // Redirigir con un mensaje de éxito
    return redirect()->route('narratives.index')->with('success', 'Narrative, content, and exercise created successfully!');
}



public function edit($id)
{
    // Cargar la narrativa con sus ejercicios asociados
    $narrative = Narrative::with('exercises')->findOrFail($id);
    $categories = Category::all();

    return view('narratives.edit', compact('narrative', 'categories'));
}




    public function update(Request $request, $id)
{
    // Validación
    $validated = $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'required|string',
        'text' => 'required|string',
        'video_url' => 'nullable|string',
        'questions.*.question' => 'required|string',
        'questions.*.options' => 'required|string',
        'questions.*.correct_option' => 'required|integer|min:0',
    ]);

    // Encontrar la narrativa a actualizar
    $narrative = Narrative::findOrFail($id);

    // Actualizar la narrativa
    $narrative->update([
        'category_id' => $validated['category_id'],
        'name' => $validated['name'],
        'description' => $validated['description'],
        'image' => $validated['image'],
    ]);

    // Actualizar el contenido relacionado
    NarrativeContent::updateOrCreate(
        ['narrative_id' => $narrative->id],
        [
            'text' => $validated['text'],
            'video_url' => $validated['video_url'],
        ]
    );

    // Actualizar las preguntas del ejercicio
    $exerciseQuestions = [];
    foreach ($validated['questions'] as $questionData) {
        $options = explode(',', $questionData['options']);
        $correctOptionIndex = (int)$questionData['correct_option'];

        if ($correctOptionIndex >= 0 && $correctOptionIndex < count($options)) {
            $exerciseQuestions[] = [
                'question' => $questionData['question'],
                'options' => $options,
                'correct_option' => $correctOptionIndex
            ];
        }
    }

    // Actualizar el ejercicio
    $exercise = Exercise::where('narrative_id', $narrative->id)->first();
    $exercise->update([
        'questions' => json_encode($exerciseQuestions),
    ]);

    return redirect()->route('narratives.index')->with('success', 'Narrative updated successfully!');
}


public function destroy($id)
{
    // Eliminar el ejercicio relacionado
    $exercise = Exercise::where('narrative_id', $id)->first();
    if ($exercise) {
        $exercise->delete();
    }

    // Eliminar el contenido relacionado
    NarrativeContent::where('narrative_id', $id)->delete();

    // Eliminar la narrativa
    $narrative = Narrative::findOrFail($id);
    $narrative->delete();

    return redirect()->route('narratives.index')->with('success', 'Narrative deleted successfully!');
}

}
