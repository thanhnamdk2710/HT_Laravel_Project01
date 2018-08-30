<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationAccount;
use Validator;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
	public function create() 
    {
        $user = Auth::user();

        if($user){
            return redirect($user->role == 1?'/admin':'/frontend');
        } 
        return view('auth.login'); 
    }

    public function store(ValidationAccount $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $check = Auth::attempt($login);
        $user = Auth::user();

        if($check){
            return redirect($user->role == 1?'/admin':'/frontend');
        }else{
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
}
