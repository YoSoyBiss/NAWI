<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Narrative;
use App\Models\NarrativeContent;
use App\Models\Exercise;
use App\Models\Progress;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear categorías específicas
        Category::factory()->normal()->create();
        Category::factory()->admin()->create();
      
    }
}
