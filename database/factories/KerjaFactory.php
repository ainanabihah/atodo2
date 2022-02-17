<?php

namespace Database\Factories;

use App\Models\Senarai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kerja>
 */
class KerjaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'status' => $this->faker->randomElement([0, 1]),
            'senarai_id' => Senarai::factory(),
        ];
    }
}
