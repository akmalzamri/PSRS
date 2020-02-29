<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treatments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $treatments = \App\Treatments::paginate(6);



        return view('user/home')->with('treatments', $treatments);
    }
    
}
