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


        if (User::where('email', 'admin@example.com')->get()->count() === 0) {
            User::factory()->create([
                'is_admin' => true,
                'email' => 'admin@example.com',
            ]);
        }

         User::factory(5)->create();
    }
}
