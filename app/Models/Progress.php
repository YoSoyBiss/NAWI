<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    // Define los atributos que se pueden asignar masivamente
    protected $fillable = ['user_id', 'exercise_id', 'correct_answers', 'incorrect_answers', 'total_questions'];

    // Si la tabla no sigue la convención (ejemplo: "progress" en plural)
    // public $table = 'nombre_tabla';

    // Si usas timestamps, asegúrate de que esté habilitado
    // public $timestamps = false;
}
