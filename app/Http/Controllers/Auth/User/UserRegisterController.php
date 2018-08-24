<?php

namespace App\Http\Controllers\Auth\User;

use App\Contracts\IUserService;
use App\Http\Requests\UserRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserRegisterController extends Controller
{
    /*
|--------------------------------------------------------------------------
| Register Controller
|--------------------------------------------------------------------------
|
| This controller handles the registration of new users as well as their
| validation and creation. By default this controller uses a trait to
| provide this functionality without requiring any additional code.
|
*/

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'home';
    protected $userRepo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(IUserService $userRepo)
    {
        $this->middleware('guest');
        $this->userRepo = $userRepo;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
//    protected function create(array $data)
//    {
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => bcrypt($data['password']),
//        ]);
//    }



    public function register(UserRequest $request)
    {
//        try {
            $user = $this->userRepo->store($request->all());
            $user->roles()->sync([2]);
            return redirect()->back();
//        } catch (\Exception $e) {
//            report($e);
//        }
    }
}
