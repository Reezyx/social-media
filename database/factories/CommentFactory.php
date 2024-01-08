<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'id' => Uuid::uuid4()->toString(),
            'comment' => $this->faker->paragraph,
            'post_id' => Post::factory(),
            'user_id' => User::factory(),
            'parent_comment_id' => null,
        ];
    }
}
