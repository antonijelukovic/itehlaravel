<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Servis;
use App\Models\Klijent;

class VoziloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registarski_broj' => $this->faker->unique()->numerify('######'),
            'godiste' => $this->faker->numberBetween($min = 1908, $max = date("Y")),
            'kilometraza' => $this->faker->numberBetween($min = 0, $max = 1000000),
            'klijent_id' => Klijent::factory(),
            'servis_id' => Servis::factory()
        ];
    }
}
