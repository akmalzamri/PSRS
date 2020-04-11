<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Bookings;
use App\Enquiries;
use App\Treatments;
use Illuminate\Http\Request;
use App\Mail\CustomerBookingMail;
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
                        "price" => $treatment->treatmentprice,
                        "duration" => $treatment->treatmentduration

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
            "price" => $treatment->treatmentprice,
            "duration" => $treatment->treatmentduration
           
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('status', 'Treatment added to cart successfully!');

    }

    public function cart()
    {
        
        $users = \App\User::where('status', '1')->get();
              
        return view('user/booking-cart')->with('users', $users);
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



    public function details($treatments_id)
    {
        $treatment = \App\Treatments::findOrFail($treatments_id);

       

        return view('user/booking-step3')->with('treatment', $treatment);
    }


    public function bookingstep4(Request $request)
    {
    
        $cart = session()->get('cart');

        $request->session()->put('date',$request->input('date'));
        $request->session()->put('time',$request->input('time'));
        $request->session()->put('therapist',$request->input('therapist'));
        $request->session()->put('cart', $cart);
        

        return view('user/booking-step4')->with('therapist',$request->session()->get('therapist'))->with('date',$request->session()->get('date'))->with('time',$request->session()->get('time'))->with('cart',$request->session()->get('cart'));
    }

    public function storebooking(Request $request)
    
    {
        
        $carts = session()->get('cart');
        $total = 0;
        $totalduration = 0;

        foreach ($carts as $cart) {
            
            $total = $total + ($cart['price'] * $cart['quantity']);
            $totalduration = $totalduration + $cart['duration'];
            $treatment[] = $cart['name'];
            $treatmentprice[] = $cart['price'];
            $treatmentduration[] = $cart['duration'];
        }
        // dd($cart,$total,$treatment);
    //   dd($totalduration);


        $bookings = new bookings();
        $bookings->user_id = Auth::user()->id;
        $bookings->user_name = Auth::user()->name; 
        $bookings->user_email = Auth::user()->email;
        $bookings->user_contact = Auth::user()->contact;
        $bookings->booking_date = $request->session()->get('date');
        $bookings->booking_time =  $request->session()->get('time');
        $bookings->therapist =  $request->session()->get('therapist');
        $bookings->total_amount = $total;
        $bookings->treatment_name = $treatment;
        $bookings->treatmentduration = $totalduration;
 
     
        $bookings->status = 0;
      
        $bookings->save();

        Mail::to('test@test.com')->send(new CustomerBookingMail($bookings));

        $request->session()->forget('cart'); 
        
        return redirect('/receipt');
    }


    public function bookingreceipt(Request $request)
    {

        $managebookings = \App\Bookings::where('user_id', Auth::user()->id)->get();

        
        return view('user/booking-receipt')->with('date',$request->session()->get('date'))->with('time',$request->session()->get('time'))->with('managebookings', $managebookings);
    }

    public function managebooking()
    {
        
        $managebookings = \App\Bookings::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();

       
       

        return view('user/managebooking')->with('managebookings', $managebookings);
    }

    public function removebooking($id)
    {
        $bookings = Bookings::findOrFail($id);
        $bookings->delete();

        
        return redirect('/managebooking')->with('status', 'Your Booking is Deleted');
    }
}
