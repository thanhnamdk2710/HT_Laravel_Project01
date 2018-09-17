<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
use DB;

class DetailController extends Controller
{
    public function show($id){
    	$tags = Tag::all();
        $books = DB::table('categories')
                ->join('books','books.category_id','=','categories.id')
                ->where('books.id',$id)
                ->select('books.*','categories.name as name_category')
                ->get();
        // dd($books);
                // ->paginate(2);
    	return View('frontend.pages.detail',compact('books','tags'));
    }
}
