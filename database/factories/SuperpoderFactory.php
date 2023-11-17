<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Superpoder>
 */
class SuperpoderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $poder = $this->faker->randomElement([
        'Volar',
        'Invisibilidad',
        'Telepatía',
        'Telequinesis',
        'Teletransportación',
        'Cambiar de forma',
        'Invulnerabilidad',
        'Súper velocidad',
        'Súper fuerza',
        'Manipulación del fuego']);
        return [
            'superpoder' => $poder
        ];
    }
}
