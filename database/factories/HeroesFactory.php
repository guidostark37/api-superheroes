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
        $heroe = $this->faker->unique()->name();
        return [
            'nombre_heroe' => $heroe,
            'password' => $this->faker->password(),
            'año_inicio' => $this->faker->year(),
            'nivel' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),

            'Planeta_id'=> function(){
                return \App\Models\Planeta::factory()->create()->id;
            },

            'Equipo_id' => function(){

                return \App\Models\Equipo::factory()->create()->id;
            }


        ];
    }
}
