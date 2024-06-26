<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coursee;

class CourseeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coursee::factory()->count(5)->create();
    }
}
