<?php

namespace Database\Seeders;

use App\Models\Superpoder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperpoderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superpoder::factory(10)->create();
    }
}
