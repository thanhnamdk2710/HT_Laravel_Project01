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
         factory(App\Author_Book::class, 10)->create(
        );
    }
}
