<?php

namespace App\Http\Controllers\Admin;


use App\Contracts\IUserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    protected $userRepo;

    public function __construct(IUserService $userRepo)
    {
        $this->userRepo = $userRepo;
    }


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
            return view('admin.dashboard');
    }

    public function datatable()
    {
        return view('admin.datatabel');
    }

    public function users(){
        $users = $this->userRepo->getData();
        return view('admin/dashboard',[ 'users'=> $users ]);
//        dd( $users);
    }
}