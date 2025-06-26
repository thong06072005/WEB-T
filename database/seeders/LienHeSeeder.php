<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LienHe;
use Database\Factories\LienHeFactory;

class LienHeSeeder extends Seeder
{
    public function run(): void
    {
        LienHe::factory()->count(10)->create();
    }
}
