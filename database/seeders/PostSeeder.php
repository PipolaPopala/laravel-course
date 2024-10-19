<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post = Post::factory(20)->create();

        $tagIds = Tag::all()->pluck('id');

        foreach ($post as $post) {
            $post->tags()->attach($tagIds->random(fake()->numberBetween(1, 4)));
        }
    }
}
