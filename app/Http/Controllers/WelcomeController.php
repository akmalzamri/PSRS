<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treatments;

class WelcomeController extends Controller
{


    public function index()
    {

        $treatments = \App\Treatments::paginate(6);

        return view('welcome')->with('treatments', $treatments);
    }



    
}
