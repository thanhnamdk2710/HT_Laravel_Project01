<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(CategoryTableSeeder::class);
       $this->call(UsersTableSeeder::class);
       $this->call(BooksTableSeeder::class);
       $this->call(AuthorsTableSeeder::class);
       $this->call(Authors_BooksTableSeeder::class);
       $this->call(RatingsTableSeeder::class);
       $this->call(TagsTableSeeder::class);
       $this->call(Tags_BooksTableSeeder::class);
    }
}
