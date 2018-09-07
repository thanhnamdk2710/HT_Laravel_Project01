<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
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

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
    ];
});

$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [   
        'category_id' => factory('App\Models\Category')->create()->id,	
        'ISBN'=>$faker->ean13,
        'name'=>$faker->name,
        'alias'=>$faker->slug,
        'image'=>$faker->imageUrl($width = 200, $height = 200),
        'author' =>$faker->name,
        'editor'=>$faker->name,
        'publisher'=>$faker->name,
        'count'=>$faker->numberBetween(1,10), 
        'average'=>12.34,
    ];
});

$factory->define(App\Models\Tag::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
    ];
});

$factory->define(App\Models\Tag_Book::class, function (Faker $faker) {
    return [
        'tag_id' => factory('App\Models\Tag')->create()->id,
        'book_id' => factory('App\Models\Book')->create()->id,
    ];
});

$factory->define(App\Models\Rating::class, function (Faker $faker) {
    return [

        'user_id' => factory('App\Models\User')->create()->id,
        'book_id' => factory('App\Models\Book')->create()->id,
        'content'=>$faker->text,
    	'star'=>1,
    ];
});
