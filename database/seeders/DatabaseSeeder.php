<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\PlanetaFactory;
use Illuminate\Database\Seeder;
use App\Models\Planeta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Planeta::factory(5)->create();
        $this->call([
                    PlanetaSeeder::class,
                    EquipoSeeder::class,
                    AsignarMisionSeeder::class,
                    SuperpoderSeeder::class,
                    HeroesSeeder::class
        ]);
    }
}
