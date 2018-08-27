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
        factory(App\Tag_Book::class, 10)->create(
        );
    }
}
