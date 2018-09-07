<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
                ->leftJoin('ratings','users.id','=','ratings.user_id')
                ->leftJoin('books','books.id','=','ratings.book_id')
                ->select('users.*',DB::raw('COUNT(ratings.star) as count'))
                ->where('users.role','0')
                ->orderBy('count', 'desc')
                ->groupBy('email')
                ->get();
                
        return view('backend.users.index', compact('users','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = DB::table('users')
                ->join('ratings','users.id','=','ratings.user_id')
                ->join('books','books.id','=','ratings.book_id')
                ->join('categories','books.category_id','=','categories.id')
                ->select('books.name','books.author as name_author','books.image','ratings.star','ratings.content','categories.name as name_category')
                ->where('user_id',$id)
                ->get();

        return view('backend.users.show', compact('details'));
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

    public function getAjax(Request $request,$aid)
    {
        if($request->astatus == 0){
            $user = User::where('id', $aid)->update(['status' => 1]);
            echo "images/icon/deactive.gif";
        }
        else{
            $user = User::where('id', $aid)->update(['status' => 0]);
            echo "images/icon/active.gif";
        }
    }
}
