<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
   	public function show(){
    	return View('frontend.pages.contact');
    }
}