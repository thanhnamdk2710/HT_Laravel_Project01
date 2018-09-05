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
        'avatar' => $faker->imageUrl($width = 200, $height = 200),
        'email' => $faker->unique()->safeEmail,
        'gender'=>$faker->numberBetween(0,1),
        'password' => bcrypt('secret'),
        'status'=>$faker->numberBetween(0,1),
        'role'=>$faker->numberBetween(0,1),
        'remember_token' => str_random(10),
    ];
});
