<?php

use App\Game;
use App\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Comment::class, function (Faker $faker) {

    return [
        'message' => $faker->sentence(),
        'user_id' => factory(User::class)->create()->id,
        'game_id' => factory(Game::class)->create()->id,
    ];
});
