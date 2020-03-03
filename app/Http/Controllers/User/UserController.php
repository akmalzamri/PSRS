<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Enquiries;
use App\Treatments;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userprofile()
    {
        if (Auth::user()) {
            $users = User::find(Auth::user()->id);

            if ($users) {
                return view('User.userprofile')->with('users', $users);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function updateprofile()
    {
        if (Auth::user()) {
            $users = User::find(Auth::user()->id);

            if ($users) {
                return view('User.userprofile-update')->with('users', $users);
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }



    public function userprofileupdate(Request $request)
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

        $users->save();

        return redirect('/userprofile')->with('status', 'Your Data is Updated!');
    }

    public function enquiries()
    {
        return view('User.enquiries');
    }

    public function store()
    {

        $enquiries = new enquiries();
        $enquiries->name = request('name');
        $enquiries->email = request('email');
        $enquiries->message = request('message');

        $enquiries->save();

        return redirect('/enquiries')->with('status', 'Your Enquiries has been submitted!');
    }

    
    public function addtocart($treatments_id)
    {
        $treatment = Treatments::find($treatments_id);
 
        if(!$treatment) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
          

            $cart = [
                    $treatments_id => [
                        "name" => $treatment->treatmentname,
                        "quantity" => 1,
                        "price" => $treatment->treatmentprice

                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('status', 'Treatment added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$treatments_id])) {
 
            $cart[$treatments_id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('status', 'Treatment added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$treatments_id] = [
            "name" => $treatment->treatmentname,
            "quantity" => 1,
            "price" => $treatment->treatmentprice
           
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('status', 'Treatment added to cart successfully!');

    }

    public function cart()
    {
        
       
              
        return view('user/booking-cart');
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('status', 'Treatment removed successfully');
        }
    }



    public function bookingstep3()
    {
        return view('user/booking-step3');
    }


    public function bookingstep4(Request $request)
    {
        
        $request->session()->put('date',$request->input('date'));

 
        
        return view('user/booking-step4')->with('date',$request->session()->get('date'));
    }


    public function bookingreceipt()
    {
        return view('user/booking-receipt');
    }

    public function managebooking()
    {
        return view('user/managebooking');
    }
}
