<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if (Auth::user()->role=='administrator') {
                return $next($request);
            }else{
                return redirect()->back()->with("error","আপনি এটি সম্পাদনা করতে পারবেন না !!");
            }
        }else{
            return redirect('/login');
        }
    }
}
