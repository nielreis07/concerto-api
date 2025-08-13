<?php

namespace Database\Seeders;

use App\Models\Musico;
use App\Models\Instrumento;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Musico::factory(10)->create();
        Instrumento::factory(10)->create();
    }
}
