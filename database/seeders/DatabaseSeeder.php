<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $prepareUsersData = [
            [
                'email' => 'admin@lara.com',
                'name' => 'Рейстлин Маджере',
                'password' => '1234',
                'role' => 'admin',
                'profile' => [
                    'name' => 'Рейстлин Маджере',
                    'login' => 'raistlin',
                    'avatar' => '',
                    'description' => 'Могущественный маг с амбициозными устремлениями.',
                    'address' => 'Башня Уэйрет, Кринн',
                    'phone' => 1234567890,
                    'gender' => 0,
                    'birthed_at' => '243-01-01',
                ],
            ],
            [
                'email' => 'manager@lara.com',
                'name' => 'Карамон Маджере',
                'password' => '1234',
                'role' => 'manager',
                'profile' => [
                    'name' => 'Карамон Маджере',
                    'login' => 'karamon',
                    'avatar' => '',
                    'description' => 'Сильный воин и преданный брат.',
                    'address' => 'Утеха, Кринн',
                    'phone' => 9876543210,
                    'gender' => 0,
                    'birthed_at' => '240-01-01',
                ],
            ],
            [
                'email' => 'user@lara.com',
                'name' => 'Крисания',
                'password' => '1234',
                'role' => 'user',
                'profile' => [
                    'name' => 'Крисания',
                    'login' => 'kristanna',
                    'avatar' => '',
                    'description' => 'Лечащая жрица с хорошей душой.',
                    'address' => 'Уступающая земля, Кринн',
                    'phone' => 2345678901,
                    'gender' => 1,
                    'birthed_at' => '246-01-01',
                ],
            ],
            [
                'email' => 'guest@lara.com',
                'name' => 'Тика Вейлан',
                'password' => '1234',
                'role' => 'guest',
                'profile' => [
                    'name' => 'Тика Вейлан',
                    'login' => 'tika',
                    'avatar' => '',
                    'description' => 'Смелая и умная женщина-приключенец. Жена Карамона.',
                    'address' => 'Утеха, Кринн',
                    'phone' => 3456789012,
                    'gender' => 1,
                    'birthed_at' => '247-01-01',
                ],
            ],
        ];

        foreach ($prepareUsersData as $prepareUserData) {
            $user = User::firstOrCreate([
                'email' => $prepareUserData['email'],
            ], [
                'name' => $prepareUserData['name'],
                'password' => Hash::make($prepareUserData['password']),
            ]);
            $user->profile()->firstOrCreate([], $prepareUserData['profile']);

//            $profile = Profile::factory()
//                ->count(1)
//                ->for($user)
//                ->has(Role::factory(['name' => $prepareUserData['role']])->count(1))
//                ->has(
//                    Post::factory()->count(10)
//                    ->has(Comment::factory()->count(10))
//                    ->hasAttached(Tag::inRandomOrder()->first())
//                )
//                ->create(['name' => $prepareUserData['name']]);
        }

//        $user = User::firstOrCreate([
//            'email' => 'admin@mail.com'
//        ], [
//           'name' => 'admin',
//            'password' => Hash::make('password')
//        ]);
//        $user->profile()->firstOrCreate();

        $this->call([
//            CategorySeeder::class,
//            TagSeeder::class,
//            PostSeeder::class,
//            CommentSeeder::class,
        ]);
    }
}
