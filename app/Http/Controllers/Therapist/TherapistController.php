<?php

namespace App\Http\Controllers\Therapist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class TherapistController extends Controller
{


    public function dashboardtherapist()
    {
        $bookings = \App\Bookings::paginate(2);
        

        return view('therapist/therapist-home', compact('bookings'));
    }
    

    
        public function therapistprofile()
    {
        if (Auth::user()) {
            $users = User::find(Auth::user()->id);

            if ($users) {
                return view('therapist.therapist-profile')->with('users', $users);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function therapistupdateprofile()
    {
        if (Auth::user()) {
            $users = User::find(Auth::user()->id);

            if ($users) {
                return view('therapist.therapist-profile-update')->with('users', $users);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function therapistprofileupdate(Request $request)
    {
        $users = User::find(Auth::user()->id);
        $users->name = $request->input('name');
        $users->gender = $request->input('gender');
        $users->idtype = $request->input('idtype');
        $users->idnumber = $request->input('idnumber');
        $users->address = $request->input('address');
        $users->city = $request->input('city');
        $users->state = $request->input('state');
        $users->country = $request->input('country');
        $users->zipcode = $request->input('zipcode');
        $users->contact = $request->input('contact');

        if($request->has('photo')){

            $path = explode('/', $request->file('photo')->store('public/profile_directory'));
            unset($path[0]);
            $publicPath = "storage/" . implode('/',$path);
            $users->photo_path = $publicPath;
        }
        if($request->has('document')){

            $path = explode('/', $request->file('document')->store('public/profile_directory'));
            unset($path[0]);
            $publicPath = "storage/" . implode('/',$path);
            $users->document_path = $publicPath;
        }
        $users->save();

        return redirect('/therapistprofile')->with('status', 'Your Data is Updated!');
    }

    public function managebooking()
    {

         $bookings = \App\Bookings::paginate(2);

        return view('therapist.therapist-managebookings')->with('bookings', $bookings);
    }
    
}
