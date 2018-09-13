<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Rating;
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
        $users = User::select('users.*', DB::raw('COUNT(ratings.star) as count'))
            ->leftJoin('ratings','users.id','=','ratings.user_id')
            ->leftJoin('books','books.id','=','ratings.book_id')
            ->where('users.role','0')
            ->orderBy('count', config('define.categories.order_by_desc'))
            ->groupBy('email')
            ->get();
 
        return view('backend.users.index', compact('users'));
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
        $fields = [
            'users.username',
            'user_id',
            'book_id',
            'books.name',
            'books.author as name_author',
            'books.image',
            'ratings.star',
            'ratings.content',
            'categories.name as name_category'
        ];
        $details = User::select($fields)
            ->join('ratings','users.id','=','ratings.user_id')
            ->join('books','books.id','=','ratings.book_id')
            ->join('categories','books.category_id','=','categories.id')
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
        $user = User::find($id);

        if($user){
            $user->delete();

            return redirect()->route('admin.users.index')->with('success','Delete a successful user');
        }else{
            return redirect()->route('admin.users.index')->with('error','user is not Exist');
        }
    }

    public function deleteReview($id,$id_book)
    {
        $review = Rating::where(['user_id' => $id, 'book_id' => $id_book])->first();
        
        if($review){
            $review->delete();

            return redirect()->back()->with('success', 'Delete the review successfully !');
        }
        return redirect()->route('admin.users.show')->with('error','Review is not Exist !');
    }

    public function getAjax(Request $request,$aid)
    {
        if($request->astatus == 0){
            $user = User::where('id', $aid)->update(['status' => 1]);
            echo "images/icon/deactive.gif";
        }else{
            $user = User::where('id', $aid)->update(['status' => 0]);
            echo "images/icon/active.gif";
        }
    }
}
