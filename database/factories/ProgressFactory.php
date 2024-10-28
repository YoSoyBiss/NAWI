<?php

namespace Database\Factories;

use App\Models\Progress;
use App\Models\User;
use App\Models\Narrative;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgressFactory extends Factory
{
    protected $model = Progress::class;

    public function definition()
    {
        $totalExercises = $this->faker->numberBetween(1, 10);
        return [
            'user_id' => User::factory(),
            'narrative_id' => Narrative::factory(),
            'completed_exercises' => $this->faker->numberBetween(0, $totalExercises),
            'total_exercises' => $totalExercises,
        ];
    }
}
