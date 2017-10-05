<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comment::class, 10)->create();
        factory(App\User::class, 10)->create()->each(function ($user) {
            $user->comments()->save(factory(App\Comment::class)->make());
        });
        factory(App\Game::class, 10)->create();
        factory(App\Platform::class, 10)->create();
        factory(App\Category::class, 10)->create();
    }
}
