<?php

namespace App\Http\Controllers\User;



use App\Contracts\Admin\User\UserInterface;
use App\Http\Controllers\Controller;
use Auth;
class UserController extends Controller
{
    protected $userRepo;

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  UserInterface $userRepo
     * @param  integer $userId
     * @return view
     */
    public function __construct(UserInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

}

