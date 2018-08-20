<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  DB::table('users')->insert([
        //    ['username' => str_random(10), 'avatar' =>"sss", 'email' => str_random(255), 'password' => bcrypt('secret'),'role'=>1],
        //    ['username' => str_random(10), 'avatar' => 'aaa', 'email' => str_random(255), 'password' => bcrypt('secret'),'role'=>1],         
        // ]);
        // 
        factory(App\User::class,10)->create();

        // factory(App\User::class, 50)->create()->each(function ($u) {
        //     $u->posts()->save(factory(App\Post::class)->make());
        // });

	}
    
}
