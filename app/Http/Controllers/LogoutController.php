<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
	public function logout()
    {
    	if(Auth::user()->role == config('define.admin.role_user')){
    		Auth::logout();
        
        	return redirect()->route('user.index');
    	}
        Auth::logout();
        
        return redirect()->route('login.index');
    }	
}
