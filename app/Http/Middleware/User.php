<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class User
{
    public function isUser()
    {
        dd(1);
        if (Auth::check()) {
            $currentUser = Auth::User()->role_id->first();
            return $currentUser->role_id;
        }
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->isUsery() == 2 )
        {
            return $next($request);
        }
        return redirect()->back();
//        if(Auth::user() && Auth::user()->role_id == 2) {
//            return $next($request);
//        } else {
//            return redirect()->back();
//        }
    }

}
