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
        // Crea la narrativa de Maíz con su contenido

        $maiz = Narrative::factory()->maiz()->create();
        NarrativeContent::factory()->create([
            'narrative_id' => $maiz->id,
            'text' => 'Cuenta la leyenda que muchos siglos atrás, antes de la existencia del dios Quetzalcóatl...',
            'video_url' => 'https://www.youtube.com/embed/abcd1234',
        ]);
    
        $nopal = Narrative::factory()->nopal()->create();
        NarrativeContent::factory()->create([
            'narrative_id' => $nopal->id,
            'text' => 'La leyenda del nopal narra cómo el cactus se convirtió en símbolo de resistencia y vida...',
            'video_url' => 'https://www.youtube.com/embed/efgh5678',
        ]);

        Exercise::factory(1)->create();
}



}