<?php

namespace Database\Factories;

use App\Models\NarrativeContent;
use App\Models\Narrative;
use Illuminate\Database\Eloquent\Factories\Factory;

class NarrativeContentFactory extends Factory
{
    protected $model = NarrativeContent::class;

    public function definition()
    {
        return [
            'narrative_id' => Narrative::factory(), // Relación con Narrative
            'text' => $this->faker->paragraphs(3, true),
            'video_url' => 'https://www.youtube.com/embed/' . $this->faker->lexify('??????'),
        ];
    }
}

