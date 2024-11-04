<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'content' => fake()->realTextBetween(100, 1000),
            'status' => fake()->numberBetween(1,3),
            'profile_id' => Profile::inRandomOrder()->first()->id,
//            'post_id' => Post::inRandomOrder()->first()->id,
//            'parent_id' => Comment::factory()->create()->id,
        ];
    }
}
