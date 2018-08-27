<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationBook;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')->paginate(config('define.CATEGORY_PAGINATE')); 
        return view('backend.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.books.create');
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
        $author = new Author();
        $book->isbn = $request_book->isbn;
        $book->name = $request_book->name;
        $book->alias = str_slug($request_book->name);
        $book->image = $file_name;  
        $author->name = $request_book->author;   
        $book->editor = $request_book->editor;
        $book->publisher = $request_book->publisher;
        $book->count = 5;
        $book->category_id = 1;
        $book->average = 1;
        $request_book->file('fImages')->move('images/books/',$file_name);
        $book->save(); 
        return redirect('admin/books')->with(['flash_level'=>'success','flash_messages'=>'Success !! Complete Add Book']);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
