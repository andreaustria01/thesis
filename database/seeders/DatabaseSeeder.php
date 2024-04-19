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
    
    protected $users = [
        [
            'name' => 'owner',
            'email' => 'owner@gmail.com',
            'password' => 'owner12345',
        ],

        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin12345',
        ],

        [
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'user12345',
        ],

        [
            'name' => 'driver',
            'email' => 'driver@gmail.com',
            'password' => 'driver12345',
        ],
    ];

    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach($this->users as $user){
            User::create($user);
        }
    }
}
