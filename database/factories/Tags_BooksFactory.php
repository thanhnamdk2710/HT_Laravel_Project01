<?php

use Faker\Generator as Faker;

$factory->define(App\Tag_Book::class, function (Faker $faker) {
    return [
        'tag_id' => factory('App\Tag')->create()->id,
        'book_id' => factory('App\Book')->create()->id,
    ];
});
