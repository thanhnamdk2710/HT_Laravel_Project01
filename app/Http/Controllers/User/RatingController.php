<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rating;

use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function postComment($id, Request $request){
    	$idBook = $id;
    	$comment = new Rating;
    	$comment->book_id = $idBook;
    	$comment->user_id = Auth::user()->id;
    	$comment->content = $request->content;
    	$comment->save();
    	return redirect()->route('frontend.pages.detail');
    }
}
