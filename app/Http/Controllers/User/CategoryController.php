<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Book;
use App\Models\Tag;
use DB;

class CategoryController extends Controller
{
    public function show($id){
        $category = Category::all();
        $tag = Tag::all();
    	$books = DB::table('categories')
                ->join('books','books.category_id','=','categories.id')
                ->where('categories.id',$id)
                ->select('books.*')
                ->paginate(2);
    	return View('frontend.pages.category', compact('books','tag','category'));
    }
}
