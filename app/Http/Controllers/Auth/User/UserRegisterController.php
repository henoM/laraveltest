<?php

namespace App\Http\Controllers\Auth\User;

use App\Contracts\Admin\User\UserInterface;
use App\Http\Requests\UserCreateRequest;
use App\Notifications\UserRegister;
use App\Models\User\User;
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
    public function __construct(UserInterface $userRepo)
    {
        $this->middleware('guest');
        $this->userRepo = $userRepo;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User\User
     */
    public function register(UserCreateRequest $request)
    {
        try {
            $user = $this->userRepo->store($request->all());
            $user->roles()->sync([2]);
            $user->notify(new UserRegister($user));
            return redirect()
                            ->back()
                            ->with('info', 'We sent you a message to the email address');
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * activate account
     *
     * @param Request $request
     */

    public function activateUser($token)
    {
        $this->userRepo->activate($token);
        return view('user.partials.activate');
    }
}
