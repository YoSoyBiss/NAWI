<?php

namespace App\Http\Controllers;

use App\Models\Exercise;

class ExerciseController extends Controller
{
    // Muestra todos los ejercicios
    public function index()
    {
        $exercises = Exercise::all(); // Obtener todos los ejercicios desde la base de datos
        return view('Actividades', compact('exercises')); // Retorna la vista con los ejercicios
    }

    // Muestra un ejercicio específico
    public function show($id)
    {
        $exercise = Exercise::findOrFail($id); // Buscar el ejercicio por ID
        return view('cuestionario', compact('exercise')); // Retorna la vista con los detalles del ejercicio
    }

    public function submit(Request $request, $id)
{
    // Aquí procesarías las respuestas del cuestionario
    $exercise = Exercise::findOrFail($id);
    
    // Obtén las respuestas del cuestionario
    $answers = $request->except('_token'); // Excepto el token CSRF

    // Aquí podrías guardar las respuestas, validarlas, o hacer algo con ellas
    // Por ejemplo, calcular la puntuación y almacenarla en la base de datos

    return redirect()->route('exercises.show', $id)->with('status', 'Respuestas enviadas!');
}

}

