<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class UserController extends Controller
{
    public function dashboard()
    {
        if(Auth::user() && Auth::user()->roles->first()->id == 2) {
            return view('user.dashboard');
        }
        else{
            dd('validator');
        };
    }
}
