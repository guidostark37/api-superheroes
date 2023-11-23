<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MisionEquipo>
 */
class MisionEquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'equipo_id' => function(){

                return \App\Models\Equipo::factory()->create()->id;
            },
            'mision_id' => function(){

                return \App\Models\Mision::factory()->create()->id;
            }
        ];
    }
}
