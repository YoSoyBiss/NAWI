<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Narrative;
use App\Models\NarrativeContent;
use Illuminate\Http\Request;
use App\Models\Category; 
use App\Models\Progress; //Importar el modelo de categorías


class ExerciseController extends Controller
{
    // Muestra todos los ejercicios
    public function index()
    {
        $exercises = Exercise::all(); // Obtener todos los ejercicios desde la base de datos
        return view('Actividades', compact('exercises')); // Retorna la vista con los ejercicios
    }
    public function show($id)
    {
        $exercise = Exercise::findOrFail($id);
        
        // Decodificar las preguntas si están almacenadas como JSON
        $exercise->questions = json_decode($exercise->questions, true); // Asegúrate de que esto sea un array
        
        // Verificar si la decodificación fue exitosa
        if (!is_array($exercise->questions)) {
            return back()->with('error', 'Las preguntas no están en el formato correcto.');
        }
        
        return view('cuestionario', compact('exercise'));
    }
    
    

    public function submit(Request $request, $id)
{
    $exercise = Exercise::findOrFail($id);
    
    // Aseguramos que las preguntas estén decodificadas correctamente
    $questions = json_decode($exercise->questions, true); // Decodificamos a un array

    // Verificar si la decodificación fue exitosa
    if (!is_array($questions)) {
        return back()->with('error', 'Las preguntas no están en el formato correcto.');
    }

    // Obtener las respuestas del cuestionario
    $answers = $request->input('questions'); // Esto debería ser un array

    // Verifica que $answers sea un array
    if (!is_array($answers)) {
        return back()->with('error', 'Las respuestas no se enviaron correctamente');
    }

    // Calcular las respuestas correctas
    $correctAnswers = 0;
    
    foreach ($questions as $index => $question) {
        $answer = $answers[$index];

        // Verifica que el objeto tenga la propiedad 'correct_option'
        if (isset($question['correct_option'])) {
            if ((int)$answer === (int)$question['correct_option']) {
                $correctAnswers++;
            }
        } else {
            return back()->with('error', 'La estructura de la pregunta no es válida');
        }
    }

    // Guarda el progreso en la base de datos
    $userId = auth()->id();
    Progress::updateOrCreate(
        ['user_id' => $userId, 'exercise_id' => $exercise->id],
        ['correct_answers' => $correctAnswers, 'incorrect_answers' => count($answers) - $correctAnswers, 'total_questions' => count($questions)]
    );
    return view('/home')
    ->with('status', 'Respuestas enviadas con éxito!');

}

    
}
