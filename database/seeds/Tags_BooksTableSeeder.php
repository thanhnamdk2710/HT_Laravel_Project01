<?php

use Illuminate\Database\Seeder;

class Tags_BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

	 	$tagId = DB::table('tags')->pluck('id')->toArray();
	 	$bookId = DB::table('books')->pluck('id')->toArray();
	 	
	 	for ($i = 0; $i <= 10; $i++) {
	        factory(App\Models\Tag_Book::class, 10)->create([
	        	'tag_id' => $faker->randomElement($tagId),
	        	'book_id' => $faker->randomElement($bookId),
	        ]);
	    }
    }
}