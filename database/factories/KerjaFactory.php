<?php

namespace Database\Factories;

use App\Models\Kerja;
use App\Models\Senarai;
use App\Models\User;
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
            'name' => $this->faker->name(),
            'status'=> $this->faker->randomElement([1, 0]),
            'senarai_id' => Senarai::factory(),
        ];
    }
}
