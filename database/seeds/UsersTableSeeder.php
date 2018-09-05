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
        //    ['username' => str_random(10), 'avatar' =>"sss", 'email' => str_random(50),'gender' => 1, 'password' => bcrypt('secret'),'status' =>1,'role'=>1],      
        // ]);
        
        // Dinh nghia lai
        factory(App\User::class, 10)->create(
        );

        // factory(App\User::class, 50)->create()->each(function ($u) {
        //     $u->posts()->save(factory(App\Post::class)->make());
        // });  

	}
    
}
