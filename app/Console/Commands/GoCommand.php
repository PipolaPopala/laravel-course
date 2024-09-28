<?php

namespace App\Console\Commands;

use App\Models\Post;
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
        //
        $data = [
            'title' => 'my title',
            'content' => 'my content',
            'author' => 'IVAN',
            'like' => 10,
            'views' => 100,
            'category' => 'PHP',
            'tag' => 'LARAVEL',
            'published_at' => '2020-12-20',
        ];

//        Post::create($data);
//        $post = Post::find(1);
//        $posts = Post::all();
//        $posts = Post::where('views', '>', 300)->get();

//        $post = Post::find(1);
//        $post->update([
//            'title' => 'updated title',
//        ]);

//        $post = Post::find(1);
//        $post->delete();

//        Post::query()->update(['views' => 50]);
    }
}
