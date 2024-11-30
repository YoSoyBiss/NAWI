<?php

namespace Database\Factories;

use App\Models\Exercise;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseFactory extends Factory
{
    protected $model = Exercise::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'narrative_id' => \App\Models\Narrative::factory(), // Se asume que tienes un factory para 'Narrative'
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'questions' => json_encode([ // Puedes añadir preguntas de ejemplo aquí
                [
                    'question' => $this->faker->sentence(),
                    'choices' => [
                        $this->faker->word,
                        $this->faker->word,
                        $this->faker->word,
                    ],
                    'answer' => $this->faker->word,
                ],
                [
                    'question' => $this->faker->sentence(),
                    'choices' => [
                        $this->faker->word,
                        $this->faker->word,
                        $this->faker->word,
                    ],
                    'answer' => $this->faker->word,
                ],
            ]),
        ];
    }
}
