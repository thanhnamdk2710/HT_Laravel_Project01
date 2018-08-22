<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'created_at' => new DateTime,
		'updated_at' => new DateTime,
	];
});
