<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create several of each time of user
        User::factory(3)->create(['role' => 'Doctor']);
        User::factory(7)->create(['role' => 'Admin']);
        User::factory(50)->create(['role' => 'Patient']);
    }
}
