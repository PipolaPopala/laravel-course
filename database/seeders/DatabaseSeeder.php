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

        $roles = [
            'admin' => 'admin',
            'manager' => 'manager',
            'user' => 'user',
            'guest' => 'guest',
        ];

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['title' => $roleName]);
        }

        $this->call([
            CategorySeeder::class,
            TagSeeder::class,
        ]);

        foreach ($prepareUsersData as $prepareUserData) {
            $role = Role::where('title', $prepareUserData['role'])->first();

            $user = User::firstOrCreate([
                'email' => $prepareUserData['email'],
            ], [
                'name' => $prepareUserData['name'],
                'password' => Hash::make($prepareUserData['password']),
            ]);
//            ->has(Role::factory(['title' => $prepareUserData['role']])->count(1));
            $user->roles()->attach($role->id); // наверняка потом переделаю отношения роли к юзеру, не как многие ко многим, а как один к омногим, тогда будет по другому здесь код

//            $profile = $user->profile()->firstOrCreate(['user_id' => $user->id], $prepareUserData['profile']); // альтернативный вариант создания профиля через связь, а не через обращение к модели профиля
//            $profile = Profile::firstOrCreate(['user_id' => $user->id], $prepareUserData['profile']); // альтернативный вариант создания профиля не через связь, а через обращение к модели профиля

            $profile = Profile::factory()
                ->for($user)
                ->has(
                    Post::factory()
                    ->count(fake()->numberBetween(1,4))
                    ->has(Comment::factory()->count(fake()->numberBetween(0,4)))
//                    ->hasAttached(Tag::inRandomOrder()->take(fake()->numberBetween(1, 3)))
                )
                ->create($prepareUserData['profile']);
        }

//        $user = User::firstOrCreate([
//            'email' => 'admin@mail.com'
//        ], [
//           'name' => 'admin',
//            'password' => Hash::make('password')
//        ]);
//        $user->profile()->firstOrCreate(); // простейший вариант создать преподготовленого пользователя без особых данных

//        $this->call([
//            PostSeeder::class,
//            CommentSeeder::class,
//        ]);
    }
}
