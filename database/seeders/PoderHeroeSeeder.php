<?php

namespace Database\Seeders;

use App\Models\Heroes;
use App\Models\PoderHeroe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoderHeroeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        PoderHeroe::factory(5)->create();


    }
}
