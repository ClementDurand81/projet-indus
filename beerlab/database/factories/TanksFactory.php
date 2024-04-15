<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tanks>
 */
class TanksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word(),
            'Adresse' => $this->faker->sentence(10),
            'NumSerie' => $this->faker->sentence(10),
            'Status' => $this->faker->numberBetween(0, 100),
            'DateDebut' => $this->faker->numberBetween(0, 100),
            'DateFin' => $this->faker->numberBetween(0, 100)
        ];
    }
}
