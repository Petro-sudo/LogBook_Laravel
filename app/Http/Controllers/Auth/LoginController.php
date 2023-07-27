<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

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
// switch(Auth::user()->role){
//     case 0:
//     $this->redirectTo = '/admin';
//     return $this->redirectTo;
//         break;
//     case 1:
//             $this->redirectTo = '/intern';
//         return $this->redirectTo;
//         break;
//     case 2:
//         $this->redirectTo = '/mentor';
//         return $this->redirectTo;
//         break;
//     default:
//         $this->redirectTo = '/login';
//         return $this->redirectTo;
// }
 