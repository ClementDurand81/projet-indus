<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receipe>
 */
class ReceipeFactory extends Factory
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
            'description' => $this->faker->sentence(10),
            'Image' => $this->faker->imageUrl(
                640,
                480,
                "Image"
            ),
            'Duree' => $this->faker->numberBetween(0, 100),
            'DegresAttendu' => $this->faker->numberBetween(0, 100),
            'SucreEmbouteillage' => $this->faker->numberBetween(0, 100)
        ];
    }
}
