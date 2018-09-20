<?php
namespace App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
<<<<<<< HEAD
use App\Models\Tag;
use App\Models\Category;

class BookController extends Controller
{
     public function show(){
        $tag = Tag::all();
        $category = Category::all();
        $books = Book::orderBy('created_at', config('define.books.order_by_desc'))->paginate(config('define.books.limit_rows'));
        return view('frontend.pages.book',compact('books','category','tag'));
=======
use App\Models\Category;
use App\Models\Tag;
class BookController extends Controller
{
    public function show(){
        $tags = Tag::all();
        $categories = Category::all();
        $books = Book::orderBy('created_at', config('define.books.order_by_desc'))->paginate(config('define.books.limit_rows'));

        return view('frontend.pages.book',compact('books','categories','tags'));
>>>>>>> b4b8e39a734f1369f6fc7eefbdff2d0dcb129f6a
    }
}
