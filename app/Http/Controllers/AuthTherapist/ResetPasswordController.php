<?php

namespace App\Http\Controllers\AuthTherapist;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Http\Auth;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/therapist';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:therapist');
    }

    public function guard()
    {
        return Auth::guard('therapist');
    }

    public function broker()
    {
        return Password::broker('therapist');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('authTherapist.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
