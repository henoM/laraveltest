<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin');
    }
    public function adminLogin(Request $request)
    {
        dd($request->all());
    }

    public function dashboard()
    {
        if(Auth::user() && Auth::user()->roles->first()->id == 1) {
            return view('admin.dashboard');
        }
        else{
            dd('validator');
        }

    }

    public function basic()
    {
       dd(1);
    }
}