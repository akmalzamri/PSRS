<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Enquiries;
use App\Therapist;
use App\Treatments;
use App\Mail\UpdateRoleMail;
use Illuminate\Http\Request;
use App\Mail\ReplyEnquiriesMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Pagination\LengthAwarePaginator;


class DashboardController extends Controller
{
    


    public function dashboardview()
    {
        $users = \App\User::paginate(5);
        $enquiries = \App\Enquiries::paginate(5);
        $treatments = \App\Treatments::paginate(5);

        return view('Admin.dashboard', compact('treatments', 'users', 'enquiries'));
    }

    // User View
    public function registered()
    {
         
        $users = \App\User::where('usertype', '0')->get();
       
        
        return view('Admin.register')->with('users', $users);
    }

    public function adminviewcustomer(Request $request, $id)
    {
        $users = User::findOrFail($id);

        return view('Admin.admin-view-customer')->with('users', $users);
    }

    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('Admin.register-edit')->with('users', $users);
    }

    

    public function registerdelete(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status', 'Your Data is Deleted');
    }

    // END User View

    // THERAPIST VIEW

    public function registeredTherapist()
    {
        $therapist = \App\User::where('status', '1')->get();
        // $therapist = \App\Therapist::paginate(2);

        return view('Admin.register-therapist')->with('therapist', $therapist);
    }

    public function adminviewtherapist(Request $request, $id)
    {
        $users = User::findOrFail($id);

        return view('Admin.admin-view-therapist')->with('users', $users);
    }

    public function therapistdelete($id)
    {
        $therapist = User::findOrFail($id);
        $therapist->delete();

        return redirect('/register-therapist')->with('status', 'Your Data is Deleted');
    }

    public function newTherapist()
    {
        $users = \App\User::where('status', '0')->get();
        
        // $therapist = \App\Therapist::paginate(2);

        return view('Admin.register-new-therapist')->with('users', $users);
    }

    public function adminviewnewtherapist($id)
    {
        $therapist = User::findOrFail($id);

        return view('Admin.admin-view-newtherapist')->with('therapist', $therapist);
    }

    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->status = $request->input('status');
        $users->update();

        // Mail::to('test@test.com')->send(new UpdateRoleMail($users));

        return redirect('/register-new-therapist')->with('status', 'Therapist Application is Approve');
    }

    // END THERAPIST VIEW


    // CUSTOMER BOOKING

    public function customerbooking()
    {

         $bookings = \App\Bookings::paginate(6);

        return view('Admin.admin-customerbooking')->with('bookings', $bookings);
    }

    // END OF CUSTOMER BOOKING


    // Enquiries View

    public function adminenquiries()
    {
        $enquiries = \App\Enquiries::paginate(6);

        return view('Admin.admin-enquiries')->with('enquiries', $enquiries);
    }

    public function adminviewenquiries($id)
    {
        $enquiries = Enquiries::findOrFail($id);

        return view('Admin.admin-view-enquiries')->with('enquiries', $enquiries);
    }

    public function replyenquiries(Request $request, $id)
    {
        $enquiries = Enquiries::findOrFail($id);

        return view('Admin.admin-view-enquiries')->with('enquiries', $enquiries);
    }

    public function emailenquiries()
    {

        $data = request()->validate([

            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('test@test.com')->send(new ReplyEnquiriesMail($data));


        return redirect('/admin-enquiries')->with('status', 'Your Email have been sent!');
    }

    public function enquiriesdelete(Request $request, $id)
    {
        $enquiries = Enquiries::findOrFail($id);
        $enquiries->delete();

        return redirect('/admin-enquiries')->with('status', 'Your Enquiries is Deleted');
    }

    // END Enquiries View




    // Add Treatment
    public function treatments()
    {
       
        $treatments = \App\Treatments::paginate(4);

      
        return view('Admin.admin-treatments')->with('treatments', $treatments);
    }

    public function addtreatments()
    {
        return view('Admin.admin-add-treatments');
    }

    public function storetreatments(Request $request)
    {

        $treatments = new treatments();
        $treatments->treatmentname = request('treatmentname');
        $treatments->treatmentprice = request('treatmentprice');
        $treatments->treatmentduration = request('treatmentduration');
        $treatments->treatmentdescription = request('treatmentdescription');

        if($request->has('photo')){

            $path = explode('/', $request->file('photo')->store('public/profile_directory'));
            unset($path[0]);
            $publicPath = "storage/" . implode('/',$path);
            $treatments->photo_path = $publicPath;
        }
        $treatments->save();

        return redirect('/admin-treatments')->with('status', 'Your treatment has been added!');
    }


 
    public function treatmentsedit(Request $request, $treatments_id)
    {
        $treatments = Treatments::findOrFail($treatments_id);

        return view('Admin.admin-edit-treatments')->with('treatments', $treatments);
    }


    public function treatmentsupdate(Request $request, $treatments_id)
    {
        $treatments = treatments::find($treatments_id);
        $treatments->treatmentname = $request->input('treatmentname');
        $treatments->treatmentprice = $request->input('treatmentprice');
        $treatments->treatmentduration = $request->input('treatmentduration');
        $treatments->treatmentdescription = $request->input('treatmentdescription');
        if($request->has('photo')){

            $path = explode('/', $request->file('photo')->store('public/profile_directory'));
            unset($path[0]);
            $publicPath = "storage/" . implode('/',$path);
            $treatments->photo_path = $publicPath;
        }
        $treatments->update();


        return redirect('/admin-treatments')->with('status', 'Your treatment is Updated');
    }


    public function treatmentsdelete(Request $request, $treatments_id)
    {
        $treatments = Treatments::findOrFail($treatments_id);
        $treatments->delete();

        
        return redirect('/admin-treatments')->with('status', 'Your Enquiries is Deleted');
    }


    // End Add Treatment
}
