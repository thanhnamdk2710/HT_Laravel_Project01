<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationAccount;
use Models\Users;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('frontend.pages.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidationAccount $request)
    {
    	$checkEmail = DB::table('users')
	    	->select('*')
	    	->where('email','=',$request->email)
	    	->get();

    	if(count($username) == 0) {
    		if( $request -> hasfile('avatar')){
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $pic = asset('/images/users/').'/'.$name;
            $file = $file->move("images/users",$name);
	        }
	        else{
	            $file = "images/users/avatar.png";
	        }
    		$user = new Users([
    			'name'=>$request->name,
    			'avatar'=>$file,
    			'gender'=>$request->gender,
    			'email'=>$request->email,
    			'level'=>'2',
    			'password' =>Hash::make( $request->password)
    		]);
    		$user->save();
    		Session::flash('success', 'Đăng ký thành viên thành công!');
    		return view('pages.registered',compact('category'));
    	}else{
    		Session::flash('error','Username này đã tồn tại, bạn vui lòng nhập username khác');
    		return view('pages.registered',compact('category'));
    	}
    }
}
