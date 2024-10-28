<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NarrativeContent extends Model
{
    use HasFactory;

    protected $fillable = ['narrative_id', 'text', 'video_url'];

    // Relación inversa uno a uno con Narrative
    public function narrative()
    {
        return $this->belongsTo(Narrative::class);
    }
}
