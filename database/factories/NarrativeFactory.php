<?php

namespace Database\Factories;

use App\Models\Narrative;
use Illuminate\Database\Eloquent\Factories\Factory;

class NarrativeFactory extends Factory
{
    protected $model = Narrative::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'cover_image' => $this->faker->imageUrl(640, 480, 'abstract', true, 'cover'),
        ];
    }
}