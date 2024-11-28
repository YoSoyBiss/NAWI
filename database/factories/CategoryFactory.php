<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = \App\Models\Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word, // Nombre aleatorio para categorías dinámicas
            'description' => $this->faker->sentence, // Descripción aleatoria
        ];
    }

    // Método para categorías específicas
    public function normal()
    {
        return $this->state([
            'name' => 'Normal',
            'description' => 'Categoría de acceso estándar.',
        ]);
    }

    public function admin()
    {
        return $this->state([
            'name' => 'Admin',
            'description' => 'Categoría de acceso administrativo.',
        ]);
    }
}
