<?php

namespace App\Http\Controllers\AuthTherapist;

use App\Therapist;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
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
    // protected $redirectTo = '/therapistprofile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:therapist');
    }

    public function registerTherapist()
    {
        return view('authTherapist.therapist-register');
    }

    public function store()
    {

        $therapist = new User();
        $therapist->name = request('name');
        $therapist->email = request('email');
        $therapist->password = \Hash::make(Request()->password);
        $therapist->usertype = 1;
      
        // kalau ada user_id save siap2
        // $therapist->user_id = request('user_id')

        $therapist->save();

        
        return redirect()->to('login');
    }

    


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Therapist
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'usertype' => 1,
            'password' => Hash::make($data['password']),
        ]);
    }
    
}
