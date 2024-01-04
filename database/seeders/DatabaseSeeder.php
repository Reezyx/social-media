<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
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

    Post::factory(20)->create();
    User::factory(3)->create();
       
    // User::create([
    //     'id' => '',
    //     'name' => 'Zaidar Fadli Mizar',
    //     'username' => 'zaidar', 
    //     'email' => 'zaidar@gmail.com', 
    //     'password' => '12345678'
    // ]);

    // User::create([
    //     'name' => 'Naufal Fadhilla',
    //     'username' => 'naufal', 
    //     'email' => 'naufal@gmail.com', 
    //     'password' => '12345678'
    // ]);

    // User::create([
    //     'name' => 'Triandita Nazwa',
    //     'username' => 'triandita', 
    //     'email' => 'triandita@gmail.com', 
    //     'password' => '12345678'
    // ]);

    }
}
