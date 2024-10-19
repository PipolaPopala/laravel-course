<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realTextBetween(6, 255),
            'content' => fake()->realTextBetween(100, 1000),
            'like' => fake()->numberBetween(10, 100),
            'views' => fake()->numberBetween(10, 100),
            'is_active' => fake()->boolean,
            'status' => fake()->numberBetween(1,3),
            'published_at' => fake()->dateTime,
            'profile_id' => Profile::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
