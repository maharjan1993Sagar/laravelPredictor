<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
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

     protected function authenticated(Request $request, $user)
    {
        if(\Auth::user()->role=="Admin") {
            return redirect('/DashboardAdmin');
        }
        else if(\Auth::user()->role=="User")
            {
                return redirect('/DashboardUser');

            }
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/admin';

//    public function redirectPath()
//    {
//        if (\Auth::user()->role == 'Admin') {
//            //return "admin";
//            return route('/DashboardAdmin');
//        } else if (\Auth::user()->role == "User") {
//            return route('/DashboardUser');
//        }
//        // or return route('routename');
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
