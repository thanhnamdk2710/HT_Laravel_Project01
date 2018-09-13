<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use App\Models\Tag;
class BookController extends Controller
{
    public function show(){
        $tag = Tag::all();
        $category = Category::all();
        $book = Book::orderBy('created_at', config('define.books.order_by_desc'))->paginate(config('define.books.limit_rows'));
        return view('frontend.pages.book',compact('book','category','tag'));
    }
}