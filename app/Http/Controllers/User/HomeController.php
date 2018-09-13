<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
	public function search (Request $request)
	{
		if(isset($request->keyword)){
			$fields =[
				'books.name',
				'image',
				'author',
				'categories.name as name_category'
			];

			$searchBooks = Book::select($fields)
				->join('categories','books.category_id','=','categories.id')
				->where('books.name','like','%'.$request->keyword.'%')
				->paginate(config('define.user.limit_rows'));

			return view('frontend.pages.search',compact('searchBooks'));
		}
		return redirect()->back();
	}
}
