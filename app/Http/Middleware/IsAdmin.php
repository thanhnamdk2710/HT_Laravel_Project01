<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\Config;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            if(Auth::user()->role == config('define.admin.role_admin')){
                return $next($request);
            } else {
                return response()->view('backend.errors.403');
            }
            
        } else {
            return redirect()->route('login.index');
        }
    }
}
