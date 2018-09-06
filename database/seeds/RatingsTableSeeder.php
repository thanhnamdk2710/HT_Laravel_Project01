<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create();

	 	$userId = DB::table('users')->pluck('id')->toArray();
	 	$bookId = DB::table('books')->pluck('id')->toArray();
	 	
	 	for ($i = 0; $i <= 10; $i++) {
	        factory(App\Models\Rating::class, 10)->create([
	        	'user_id' => $faker->randomElement($userId),
	        	'book_id' => $faker->randomElement($bookId),
	        ]);
	    }
    }
}
