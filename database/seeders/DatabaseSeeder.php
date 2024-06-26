<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Coursee;
use App\Models\Kid;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Coursee::factory(10)->create();
        Kid::factory(10)->create();
        Teacher::factory(10)->create();
    }
}
