<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidationRegrister;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

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

    public function store(ValidationRegrister $request)
    {
        $checkEmail = User::where('email','=',$request->email)->first();

        if($checkEmail) {
            Session()->flash('error','Username này đã tồn tại, bạn vui lòng nhập email khác');
            
            return redirect()->back()->withInput();
        }else{
            $avatar = "avatar.jpg";
            if( $request -> hasfile('avatar')){
                $file = $request->file('avatar');
                $avatar = $file->getClientOriginalName();
                $pic = asset('/images/users/').'/'.$avatar;
                $file = $file->move("images/users",$avatar);
            }
            $user = User::create([
                'username'=>$request->username,
                'avatar'=>$avatar,
                'gender'=>$request->gender,
                'email'=>$request->email,
                'role'=>'0',
                'status'=>'0',
                'password' =>Hash::make( $request->password )
            ]);

            return view('frontend.pages.register', compact('category'))->with('success', 'Đăng ký thành viên thành công!');
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
