<?php

namespace Database\Factories;

use App\Models\Heroes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PoderHeroe>
 */
class PoderHeroeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'heroes_id'=> function(){
                return \App\Models\Heroes::factory()->create()->id;
            },
            'superpoder_id' => function(){

                return \App\Models\Superpoder::factory()->create()->id;
            }


        ];
    }
}
