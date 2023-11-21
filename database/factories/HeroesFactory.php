<?php

namespace Database\Factories;

use App\Models\Planeta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Heroes>
 */
class HeroesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_heroe' => $this->faker->name(),
            'password' => $this->faker->password(),
            'año_inicio' => $this->faker->year(),
            'nivel' => $this->faker->randomNumber(),
           
        ];
    }
}
