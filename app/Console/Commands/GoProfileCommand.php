<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GoProfileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go-profile';

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
            'login' => 'my login',
            'user' => 'my user',
            'description' => 'my description'
        ];

//        Profile::create($data);
//        $profile = Profile::find(1);
//        $profile = Profile::all();

//        $profile = Profile::find(1);
//        $profile->update([
//            'description' => 'updated description',
//        ]);

//        $profile = Profile::find(1);
//        $profile->delete();

//        Profile::query()->update(['description' => '']);
    }
}
