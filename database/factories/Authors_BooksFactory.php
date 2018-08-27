<?php

use Faker\Generator as Faker;

$factory->define(App\Author_Book::class, function (Faker $faker) {
    return [
        'author_id' => factory('App\Author')->create()->id,
        'book_id' => factory('App\Book')->create()->id,
    ];
});
