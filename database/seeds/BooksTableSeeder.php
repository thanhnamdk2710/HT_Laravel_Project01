<?php

use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;


class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	 	$faker = Faker\Factory::create();

	 	$categoryId = DB::table('categories')->pluck('id')->toArray();
	 	
	 	for ($i = 0; $i <= 10; $i++) {
	        factory(App\Models\Book::class, 10)->create([
	        	'category_id' => $faker->randomElement($categoryId)
	        	]);
	    	}
    }
}