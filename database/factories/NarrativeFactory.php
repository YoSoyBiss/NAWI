<?php

namespace Database\Factories;

use App\Models\Narrative;
use App\Models\NarrativeContent;
use Illuminate\Database\Eloquent\Factories\Factory;

class NarrativeFactory extends Factory
{
    protected $model = Narrative::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'abstract', true, 'cover'),
        ];
    }

    public function maiz()
    {
        return $this->state([
            'name' => 'La leyenda del maiz',
            'image' => 'images/maiz.jpg',
        ]);
    }
    public function nopal()
    {
        return $this->state([
            'name' => 'La leyenda del nopal',
            'image' => 'images/nopal.png',
        ]);
        }

        public function configure()
        {
            return $this->afterCreating(function (Narrative $narrative) {
                NarrativeContent::factory()->create([
                    'narrative_id' => $narrative->id,
                ]);
            });
        }
        
}