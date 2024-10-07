<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = ['narrative_id', 'title', 'description', 'questions'];

    // Relación inversa uno a muchos con Narrative
    public function narrative()
    {
        return $this->belongsTo(Narrative::class);
    }
}
