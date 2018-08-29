<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function isAdmin(){
        if (Auth::check()) {
            $currentUser = Auth::User()->Role_id->first();
            return $currentUser->role_id;
        }
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        if($this->isAdmin() == 1){
            return redirect('/user/dashboard');
        }else if($this->isAdmin() == 2){
            return redirect('/admin/dashboard');
        }else{
            return view('logout');
        }
    }


}
