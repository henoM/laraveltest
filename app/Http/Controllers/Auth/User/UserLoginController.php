<?php

namespace App\Http\Controllers\Auth\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
//        $check = Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 2,'is_active' => 1]);
//        $checkActive = Auth::attempt(['email' => $request->email, 'password' => $request->password,'is_active' => 1]);
//        if ($checkActive) {
//            if ($check) {
//                $this->sendLoginResponse($request);
//                return redirect()->to('/user/dashboard');
//
//            } else {
//                $this->incrementLoginAttempts($request);
//                return redirect()
//                    ->back()
//                    ->withInput($request->only($this->username(), 'remember'))
//                    ->with('warning', '“Invalid Email or Password”');
//            }
//        }
//        else{
//            $this->incrementLoginAttempts($request);
//            return redirect()
//                ->back()
//                ->withInput($request->only($this->username(), 'remember'))
//                ->with('warning', '“no active”');
//        }



        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->guard()->validate($this->credentials($request))) {
            $user = $this->guard()->getLastAttempted();
            // Make sure the user is active

            if ($user->is_active && $this->attemptLogin($request)) {



                if ($user->roles()->where('id', config('auth.roles.user_role_id'))->exists() && $this->attemptLogin($request)) {
                    // Send the normal successful login response
                    return $this->sendLoginResponse($request);
                }
                else {

                    return redirect()
                        ->back()
                        ->withInput($request->only($this->username(), 'remember'))
                        ->with('warning', '“Invalid Email or Password”');
                }

            }
            else {
                // Increment the failed login attempts and redirect back to the
                // login form with an error message.
                $this->incrementLoginAttempts($request);
                return redirect()
                    ->back()
                    ->withInput($request->only($this->username(), 'remember'))
                    ->with('warning', 'You need to verify your account. We have sent you an activation code, please check your email.');
            }

        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }
}
