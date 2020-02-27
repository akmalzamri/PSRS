<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    // protected function validateLogin(Request $request)
    // { 
    //     $this->validate($request, [
    //         $this->username() => [
    //             'required','string',
    //             Rule::exists('users')->where(function ($query){
    //                 $query->where('usertype','pending');
    //             })
    //         ],
    //         'password' => 'required|string',
    //     ], [
    //         $this->username() . '.exists' => 'The selected email is invalid'
    //     ]);
    // }

    protected function redirectTo()
    {
        if(Auth::user()->usertype == '2')
        {
            return 'dashboard';
        }
        else if (Auth::user()->usertype == '0')
        {
            return 'home';
        }
        else if (Auth::user()->usertype == '1')
        {
            return 'therapist-home';
        }
        else
        {
            return 'welcome';
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // protected function credentials(Request $Request)
    // {
    //     $credentials = $Request->only($this->email(),'password');
    //     return array_add($credentials, 'usertype',pending);
    // }


}
