<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['narrative_id', 'title', 'description', 'questions'];

    // Usamos 'casts' para asegurarnos de que 'questions' se trata como un arreglo
    protected $casts = [
        'questions' => 'array',  // Convertir 'questions' a un arreglo
    ];

    public function narrative()
    {
        return $this->belongsTo(Narrative::class);
    }
}
