<?php
namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Models\Progress;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function show()
    {
        // Asegúrate de que el usuario esté autenticado
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Necesitas iniciar sesión.');
        }

        // Obtener todos los ejercicios
        $exercises = Exercise::all();

        // Inicializar los valores de progreso
        $progressData = [];

        foreach ($exercises as $exercise) {
            // Obtener el progreso del usuario para este ejercicio
            $progress = Progress::where('user_id', auth()->id())
                                ->where('exercise_id', $exercise->id)
                                ->first();

            // Decodificar el campo JSON de preguntas
            $questions = json_decode($exercise->questions, true); 
            $totalQuestions = count($questions); 

            // Si no hay progreso, establecer respuestas correctas a 0
            $correctAnswers = $progress ? $progress->correct_answers : 0;

            // Calcular el porcentaje de progreso
            $progressPercentage = ($totalQuestions > 0) ? ($correctAnswers / $totalQuestions) * 100 : 0;

            // Almacenar los datos de progreso para cada ejercicio
            $progressData[] = [
                'exercise' => $exercise,
                'progressPercentage' => $progressPercentage,
                'totalQuestions' => $totalQuestions,
                'correctAnswers' => $correctAnswers,
            ];
        }

        // Pasar la variable progressData a la vista
        return view('progreso', compact('progressData'));
    }
}
