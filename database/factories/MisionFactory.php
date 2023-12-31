<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mision>
 */
class MisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mision' => $this->faker->name(),
            'descripcion' => $this->faker->paragraph(),
            'tipo_mision_id' => function (){
                return \App\Models\TipoMision::factory()->create()->id;
            }
        ];
    }
}
