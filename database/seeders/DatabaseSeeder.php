<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Narrative;
use App\Models\NarrativeContent;
use App\Models\Exercise;
use App\Models\Progress;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear usuarios
        User::factory(10)->create();

        // Crear narrativas y contenido
        Narrative::factory(5)->create()->each(function ($narrative) {
            NarrativeContent::factory()->create(['narrative_id' => $narrative->id]);
            Exercise::factory(3)->create(['narrative_id' => $narrative->id]);
        });

        // Crear progreso para cada usuario y narrativa
        Progress::factory(30)->create();
    }
}
