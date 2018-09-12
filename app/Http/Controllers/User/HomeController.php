<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationSearch;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Session;

class HomeController extends Controller
{
	public function getBook()
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
			->limit(config('define.user.limit_random_book'))
			->get();

		$newBooks = Book::select($fields)
			->join('categories','books.category_id','=','categories.id')
			->orderBy('books.created_at', config('define.categories.order_by_desc'))
			->limit(config('define.user.limit_new_book'))
			->get();

		return view('frontend.pages.index',compact('randomBooks','newBooks'));
	}
	public function search (ValidationSearch $request)
	{
		$fields =[
			'books.name',
			'image',
			'author',
			'categories.name as name_category'
		];
		
		$searchBooks = Book::select($fields)
			->join('categories','books.category_id','=','categories.id')
			->where('books.name','like','%'.$request->book.'%')
			->get()
			->toArray();

		return view('frontend.pages.search',compact('searchBooks'));
	}
}
