<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Follow;
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

        Post::factory(15)->create();
        User::factory(7)->create();
        Comment::factory(20)->create([
            'post_id' => function () {
                return Post::inRandomOrder()->first()->id;
            },
            'user_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
        ])->each(function ($comment) {
            Comment::factory(1)->create([
                'parent_comment_id' => $comment->id,
                'post_id' => $comment->post_id,
                'user_id' => $comment->user_id,
            ]);
        });


        // INI BISA NAMUN 
        // BERKEMUNGKINAN following_id dan follower_id bisa sama

        // Follow::factory(20)->create([
        //     'following_id' => function () {
        //         return User::inRandomOrder()->first()->id;
        //     },
        //     'follower_id' => function () {
        //         return User::inRandomOrder()->first()->id;
        //     }
        // ]);

        Follow::factory(20)->create([
            'follower_id' => function () {
                return User::inRandomOrder()->first()->id;
            },
            'following_id' => function ($attributes) {
                // Mendapatkan ID pengguna acak yang tidak sama dengan follower_id
                do {
                    $followingUser = User::inRandomOrder()->first();
                } while ($followingUser->id == $attributes['follower_id']);

                return $followingUser->id;
            },
        ]);
    }
}
