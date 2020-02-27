<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiries;

class EnquiriesController extends Controller
{
    public function enquiries()
    {
        return view('welcome');
    }

    public function store()
    {

        $enquiries = new enquiries();

        $enquiries->name = request('name');
        $enquiries->email = request('email');
        $enquiries->message = request('message');

        $enquiries->save();

            return redirect('/welcome-enquiries')->with('status', 'Your Enquiries has been submitted!');
    }
}
