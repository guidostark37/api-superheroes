<?php

namespace Database\Seeders;

use App\Models\MisionEquipo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MisionEquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MisionEquipo::factory(5)->create();
    }
}
