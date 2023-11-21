<?php

namespace Database\Seeders;

use App\Models\Heroes;
use Database\Factories\HeroesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Heroes::factory(10)->create();
    }
}
