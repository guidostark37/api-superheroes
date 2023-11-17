<?php

namespace Database\Seeders;

use App\Models\TipoMision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignarMisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            TipoMision::factory(2)->create();
    }
}
