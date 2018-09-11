<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidationAccount;
use Validator;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Config;

class LoginController extends Controller
{
	public function create() 
    {
        if(Auth::check()){
            return redirect(Auth::user()->role == config('define.admin.role_admin') ? '/admin' : '/frontend');
        }

        return view('auth.login'); 
    }

    public function store(ValidationAccount $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        $checkLogin = Auth::attempt($login);

        if($checkLogin) {
            return redirect(Auth::user()->role == config('define.admin.role_admin') ? '/admin' : '/frontend');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
}
