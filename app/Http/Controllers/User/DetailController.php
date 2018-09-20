<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Rating;

use DB;

class DetailController extends Controller
{
    public function show($id){
    	$tags = Tag::all();
        $comments = Rating::all();
        $books = DB::table('categories')
                ->join('books','books.category_id','=','categories.id')
                ->where('books.id',$id)
                ->select('books.*','categories.name as name_category')
                ->get();

    	return View('frontend.pages.detail',compact('books','tags','comments','books1'));
    }
}
