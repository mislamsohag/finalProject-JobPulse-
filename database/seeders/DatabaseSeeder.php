<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => 'password',
            'role_id' => 1
        ]);
        User::create([
            'name' => 'editor',
            'email' => 'editor@email.com',
            'password' => 'password',
            'role_id' => 2
        ]);
        User::create([
            'name' => 'user',
            'email' => 'admin@email.com',
            'password' => 'password',
            'role_id' => 3
        ]);
    }
}
