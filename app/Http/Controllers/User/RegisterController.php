<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationAccount;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
        $checkEmail = User::select('*')
            ->where('email','=',$request->email)
            ->get();

        if(count($checkEmail) == 0) {
            if( $request -> hasfile('avatar')){
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $pic = asset('/images/users/').'/'.$name;
            $file = $file->move("images/users",$name);
            }
            else{
                $file = "images/users/avatar.jpg";
            }
            $user = new User([
                'username'=>$request->username,
                'avatar'=>$file,
                'gender'=>$request->gender,
                'email'=>$request->email,
                'role'=>'0',
                'status'=>'0',
                'password' =>Hash::make( $request->password )
            ]);
            $user->save();

            return view('frontend.pages.register',compact('category'))->with('success', 'Đăng ký thành viên thành công!');
        }else{
            return view('frontend.pages.register',compact('category'))->with('error','Username này đã tồn tại, bạn vui lòng nhập email khác');
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
