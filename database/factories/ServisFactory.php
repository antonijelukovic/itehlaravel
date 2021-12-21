<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'grad' => $this->faker->city(),
            'adresa' => $this->faker->streetAddress(),
            'broj_zaposlenih' => $this->faker->numberBetween($min = 1, $max = 50),
            'website' => $this->faker->unique()->url()
        ];
    }
}
