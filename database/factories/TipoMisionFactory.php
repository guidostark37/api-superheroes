<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TipoMision>
 */
class TipoMisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $tmision = $this->faker->randomElement(['MR','MSU']);
        return [
            'tipo_mision' =>$tmision

        ];
    }
}
