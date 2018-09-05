<?php

use Illuminate\Database\Seeder;

class Authors_BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create();

	 	$authorId = DB::table('authors')->pluck('id')->toArray();
	 	$bookId = DB::table('books')->pluck('id')->toArray();
	 	
	 	for ($i = 0; $i <= 10; $i++) {
	        factory(App\Models\Author_Book::class, 10)->create([
	        	'author_id' => $faker->randomElement($authorId),
	        	'book_id' => $faker->randomElement($bookId),
	        ]);
	    }
    }
}
