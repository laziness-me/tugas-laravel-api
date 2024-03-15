<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    // Run the seeder
    public function run()
    {
        // Create sample users
        User::factory()->count(10)->create();
    }
}
