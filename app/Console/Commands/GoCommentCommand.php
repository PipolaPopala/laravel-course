<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GoCommentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go-comment';

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
            'post_id' => 5,
            'content' => 'my content',
            'author' => 'IVAN',
            'like' => 50,
            'parent_id' => 15
        ];

//        Comment::create($data);
//        $comment = Comment::find(1);
//        $comment = Comment::all();
//        $comment = Comment::where('like', '>', 30)->get();

//        $comment = Comment::find(1);
//        $comment->update([
//            'content' => 'updated content',
//        ]);

//        $comment = Comment::find(1);
//        $comment->delete();

//        Comment::query()->update(['like' => 10]);
    }
}
