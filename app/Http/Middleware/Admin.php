<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{

    public function isAdmin()
    {
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
        if ($this->isAdmin() == 1 )
        {
            return $next($request);
        }
        return redirect()->back();
//        if(Auth::user() && Auth::user()->role_id == 1) {
//            return $next($request);
//        } else {
//            return redirect()->back();
//        }
    }

}
