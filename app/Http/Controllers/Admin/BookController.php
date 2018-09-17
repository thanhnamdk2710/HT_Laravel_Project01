<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationBook;
use App\Http\Requests\ValidationCategory;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use DB;
use File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table('categories')
                ->join('books','books.category_id','=','categories.id')
                ->select('books.*','categories.name as name_category')
                ->get();
                
        return view('backend.books.index', compact('books'));
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $selectCategory = [];
        foreach ($categories as $category) {
            $selectCategory[$category->id] = $category->name;
        }

        return view('backend.books.create', ['categories' => $selectCategory]);
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationBook $request_book)
    {
        $file_name = $request_book->file('fImages')->getClientOriginalName();
        $book = new Book();
        $book->isbn = $request_book->isbn;
        $book->name = $request_book->name;
        $book->alias = str_slug($request_book->name);
        $book->image = $file_name;  
        $book->author = $request_book->author;   
        $book->publication_date = $request_book->publication_date;   
        $book->category_id = $request_book->category;   
        $request_book->file('fImages')->move('images/books/',$file_name);
        $book->save();

        return redirect('admin/books')->with('flash_messages', 'Success!! Complete Add Book');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $books = Book::where('id', $id)->get();

        return view('backend.books.edit',compact('books','categories'));
     }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationBook $request, $id)
    {
        $books = Book::find($id);
        $books->isbn = $request->isbn;
        $books->name = $request->name;
        $books->alias = str_slug($request->name);
        $books->author = $request->author;   
        $books->publication_date = $request->publication_date;
        $books->category_id = $request->category;

        if($request->file('fImages')) {
            $file_name = $request->file('fImages')->getClientOriginalName();

            if(File::exists('images/books/' . $books->image)){
                File::delete('images/books/' . $books->image);
            }

            $books->image = $file_name;  
            $request->file('fImages')->move('images/books/', $file_name);
        }

        $books->save();  

        return redirect()->route('admin.books.index')->with('flash_messages', 'Success!! Complete Edit Book');
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
