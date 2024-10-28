<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'narrative_id', 'completed_exercises', 'total_exercises'];

    // Relación inversa muchos a uno con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación inversa muchos a uno con Narrative
    public function narrative()
    {
        return $this->belongsTo(Narrative::class);
    }
}
