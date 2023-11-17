<?php

namespace Database\Factories;
use App\Models\Planeta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Planeta>
 */
class PlanetaFactory extends Factory
{

    protected $model = Planeta::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition(): array
    {
        $planeta = $this->faker->randomElement(['Tierra','Marte','Venus','Jupiter','Otro']);
        return [
            'nombre_planeta'=>$planeta
        ];
    }
}
