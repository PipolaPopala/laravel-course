<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Console\Command;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $post = Post::factory()->create();
        $tag = Tag::factory(3)->create();

        // attach даже, если в базе уже есть, он дулирует
//        $post->tags()->attach($tag->pluck('id'));
//        $post->tags()->attach([4, 6, 3]);

        // syncWithoutDetaching - если в базе уже есть, то ничего не сделает
//        $post->tags()->syncWithoutDetaching([4, 6, 3]);

        // sync оставит только выбранные связи в базе, остальные удалит
//        $post->tags()->sync([4, 6]);

        // detach оставит только выбранные связи в базе, остальные удалит
//        $post->tags()->detach(4);

        // toggle - если записи нет, добавь, если есть - удали
//        $post->tags()->toggle(6);

        // updateExistingPivot - изменить одно из полей записи
//        $post->tags()->updateExistingPivot(6, [
//            'titleField' => 'valueField'
//        ]);

    }
}
