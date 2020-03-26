<?php

namespace App\Http\Controllers\User;

use session;
use App\User;
use App\Bookings;
Use \Carbon\Carbon;
use App\Enquiries;
use App\Treatments;
use Illuminate\Http\Request;
use App\Mail\ConfirmBookingMail;
use App\Mail\ReplyEnquiriesMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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

    
    public function viewtreatment()
    {
        return view('/home');
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
        $request->session()->put('time',$request->input('time'));
 
        
        return view('user/booking-step4')->with('date',$request->session()->get('date'))->with('time',$request->session()->get('time'));
    }

    public function storebooking(Request $request)
    
    {
       

        $cart = session()->get('cart');
        // $total = 0;
        // foreach ($cart as $data)
        // {  


        $bookings = new bookings();
        $bookings->user_id = Auth::user()->id;
        $bookings->booking_date = $request->session()->get('date');
        $bookings->booking_time =  $request->session()->get('time');
        $bookings->total_amount = $request->session()->put('total');
        // $bookings->treatments_id = $treatments_id->session()->put('treatments_id');
        // $bookings->total_amount = $data['total'];
        $bookings->status = 0;
      
        $bookings->save();

        // }
        Mail::to('test@test.com')->send(new ConfirmBookingMail($bookings));

        $request->session()->forget('cart'); 
        return redirect('/receipt')->with('status', 'Your Booking has been accepted!');
    }


    public function bookingreceipt(Request $request)
    {

        $managebookings = \App\Bookings::where('user_id', Auth::user()->id)->get();

        
        return view('user/booking-receipt')->with('date',$request->session()->get('date'))->with('time',$request->session()->get('time'))->with('managebookings', $managebookings);
    }

    public function managebooking()
    {
        
        $managebookings = \App\Bookings::where('user_id', Auth::user()->id)->get();
       

        return view('user/managebooking')->with('managebookings', $managebookings);
    }

    public function removebooking($id)
    {
        $bookings = Bookings::findOrFail($id);
        $bookings->delete();

        
        return redirect('/managebooking')->with('status', 'Your Booking is Deleted');
    }
}
