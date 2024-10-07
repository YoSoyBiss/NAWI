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
            'narrative_id' => Narrative::factory(),
            'text' => $this->faker->paragraphs(5, true),
            'video_url' => $this->faker->url,
        ];
    }
}

