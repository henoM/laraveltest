<?php

namespace App\Http\Controllers\User;

use App\Contracts\IUserService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class UserController extends Controller
{
    protected $userRepo;

    public function __construct(IUserService $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }
}
