<?php

namespace App\Http\Controllers\Admin;


use App\Contracts\Admin\User\UserInterface;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    /**
     * Object of class IUserService
     * @var interger $userRepo
     * */
    protected $userRepo;

    public function __construct(UserInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.admin');
    }

    /**
     * @param Request $request
     */
    public function adminLogin(Request $request)
    {
        dd($request->all());
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
            return view('admin.dashboard');
    }





}