<?php

use Faker\Generator as Faker;

$factory->define(App\Rating::class, function (Faker $faker) {
    return [

        'user_id' => factory('App\User')->create()->id,
        'book_id' => factory('App\Book')->create()->id,
        'content'=>$faker->paragraph,
    	'star'=>1,
    ];
});
