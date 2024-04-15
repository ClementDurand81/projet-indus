<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Measures>
 */
class MeasuresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Temperature' => $this->faker->numberBetween(0, 100),
            'Densite' => $this->faker->numberBetween(0, 100),
            'TauxSucre' => $this->faker->numberBetween(0, 100),
            'Date' => $this->faker->numberBetween(0, 100)
        ];
    }
}
