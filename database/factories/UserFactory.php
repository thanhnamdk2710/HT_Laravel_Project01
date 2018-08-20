<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        // 'avatar' => $faker->avatar,
        'avatar' => $faker->imageUrl($width = 200, $height = 200),
        'email' => $faker->unique()->safeEmail,
        'gender'=>$faker->gender,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'status'=>$faker->status,
        'role'=>$faker->role,
        'remember_token' => str_random(10),
    ];
});
