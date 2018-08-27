<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [   
        'category_id' => factory('App\Category')->create()->id,	
        'ISBN'=>$faker->ean8,
        'name'=>$faker->name,
        'alias'=>$faker->slug,
        'image'=>$faker->imageUrl($width = 200, $height = 200),
        'editor'=>$faker->name,
        'publisher'=>$faker->name,
        'count'=>$faker->numberBetween(1,10), 
        'average'=>12.34,
        // 'delete_at' => new DateTime,
        
    ];
});
