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

        $books1 = DB::table('books')
                ->join('ratings','books.id','=','ratings.book_id')
                ->join('users','users.id','=','ratings.user_id')
                ->select('books.id as bookid', 'books.*', 'users.id as userid', 'users.*')
                ->orderBy('books.created_at', 'desc')
                ->get();

    	return View('frontend.pages.detail',compact('books','tags','comments','books1'));
    }


    public function getComment(Request $request){
        if ($request->ajax()){
           $comments = DB::table('ratings')
                    ->join('users', 'users.id', '=', 'ratings.user_id')
                    ->select('ratings.id as ratingid', 'ratings.*', 'users.id as userid', 'users.*')
                    ->where('book_id', '=', $request->id)
                    ->get();
                  
            return view('commentlist', compact('comments'));
        }
    }
}
