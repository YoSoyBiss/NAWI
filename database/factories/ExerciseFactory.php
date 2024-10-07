<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\Narrative;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    public function definition()
    {
        return [
            'narrative_id' => Narrative::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'questions' => json_encode([
                [
                    'question' => $this->faker->sentence,
                    'options' => [$this->faker->word, $this->faker->word, $this->faker->word],
                    'answer' => $this->faker->word,
                ]
            ]),
        ];
    }
}
