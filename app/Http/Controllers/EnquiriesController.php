<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiries;

class EnquiriesController extends Controller
{
    public function enquiries()
    {
        return view('enquiries');
    }

    public function store()
    {

        $enquiries = new enquiries();

        $enquiries->name = request('name');
        $enquiries->email = request('email');
        $enquiries->message = request('message');

        $enquiries->save();

        return view('enquiries')->with('status', 'Your Enquiries has been submitted!');
    }
}
