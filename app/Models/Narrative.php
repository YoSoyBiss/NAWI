<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narrative extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'cover_image'];

    // Relación uno a uno con NarrativeContent
    public function content()
    {
        return $this->hasOne(NarrativeContent::class);
    }

    // Relación uno a muchos con Exercise
    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    // Relación muchos a muchos con User a través de Progress
    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}
