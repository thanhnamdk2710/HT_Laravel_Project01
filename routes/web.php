<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('customers', function(){
    $faker = Faker\Factory::create();
    $limit = 10;
    $customers = [];
    for ($i = 0; $i < $limit; $i++) {
        $customers[$i] = [
            'Họ và tên'     => $faker->name,
            'Email'         => $faker->unique()->email,
            'Số điện thoại' => $faker->phoneNumber,
            'Website'       => $faker->domainName,
            'Tuổi'          => $faker->numberBetween(20,100),
            'Địa chỉ'       => $faker->address
        ];
    }
    return response()->json($customers);
});
