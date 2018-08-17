<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function show(Request $id){
    	return View('frontend.pages.detail');
    }
}
