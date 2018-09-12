<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationCategory;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Config;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', config('define.categories.order_by_desc'))->paginate(config('define.categories.limit_rows'));

        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationCategory $request)
    {
        $checkName = Category::where('name', $request->category)->first();
        
        if($checkName){
            return redirect()->back()->with('error', 'Exist category');
        }else{
            $category = Category::create(['name' => $request->category]);

            return redirect()->route('admin.categories.index')->with('success', 'Add a successful category');
        }  
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
        $category = Category::find($id);

        if($category){
            return view ('backend.categories.edit',compact('category'));
        }else{
            return redirect()->route('admin.categories.index')->with('error','category is not Exist');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidationCategory $request, $id)
    {
        $checkName = Category::where('name',$request->category)->first();

        if($checkName){
            return redirect()->back()->with('error','Exist category');
        }else{
            $category = Category::where('id', $id)->update(['name' => $request->category]);

            return redirect('admin/categories')->with('success','Update a successful category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if($category){
            $category->delete();

            return redirect()->route('admin.categories.index')->with('success','Delete a successful category');
        }else{
            return redirect()->route('admin.categories.index')->with('error','category is not Exist');
        }
    }
}
