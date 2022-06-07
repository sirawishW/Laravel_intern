<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CuisineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nameTH' => $this->faker->word(),
            'nameEN' => $this->faker->word(),
            'nationality' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'path' => $this->faker->imageUrl(360, 360, 'foods', true)
        ];
    }
}
