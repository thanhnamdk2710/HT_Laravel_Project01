<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class HomeController extends Controller
{
	public function getbook()
	{
		$fields =[
			'books.name',
			'image',
			'author',
			'categories.name as name_category'
		];
		$randomBooks = Book::select($fields)
			->join('categories','books.category_id','=','categories.id')
			->inRandomOrder()
			->limit(3)
			->get();

		$newBooks = Book::select($fields)
			->join('categories','books.category_id','=','categories.id')
			->orderBy('created_at', config('define.categories.order_by_desc'))
			->limit(9);
			->get()

		return view('frontend.pages.index',compact('randomBooks','newBooks'));
	}
}
