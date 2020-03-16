@extends('layouts.therapistnavbar')



@section('title')
My Profile
@endsection


@section('content')


<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">My Profile</h5>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status')}}
                    </div>
                    @endif
                </div>
                <div class="card-body">
                <form action="/therapistprofile-update" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $users->name }}">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="" selected disabled></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">ID Type</label>
                                        <select name="idtype" class="form-control">
                                            <option value="" selected disabled></option>
                                            <option value="mykad">MyKad</option>
                                            <option value="mypr">MyPR</option>
                                            <option value="malaysianpassport">Malaysian Passport</option>
                                            <option value="foreignpassport">Foreign Passport</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>ID Number</label>
                                        <input type="text" name="idnumber" class="form-control" placeholder="" value="{{ $users->idnumber }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="" value="{{ $users->address }}" >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" placeholder="" value="{{ $users->city }}" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="number" name="zipcode" class="form-control" placeholder="" value="{{ $users->zipcode }}" >
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select name="state" class="form-control">
                                            <option value="" selected disabled></option>
                                            <option value="Johor">Johor</option>
                                            <option value="Kedah">Kedah</option>
                                            <option value="Kelantan">Kelantan</option>
                                            <option value="Labuan">Labuan</option>
                                            <option value="Melaka">Melaka</option>
                                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                                            <option value="Pahang">Pahang</option>
                                            <option value="Pulau Pinang">Pulau Pinang</option>
                                            <option value="Putrajaya">Putrajaya</option>
                                            <option value="Perak">Perak</option>
                                            <option value="Perlis">Perlis</option>
                                            <option value="Sabah">Sabah</option>
                                            <option value="Sarawak">Sarawak</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select name="country" class="form-control">
                                         
                                            <option value="malaysia">Malaysia</option>
                                            
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6 ">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact" class="form-control" placeholder="" value="{{ $users->contact }}" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="col-lg-12">Profile Photo</label>

                                    <div class="col-lg-12">
                                    </div>
    
                                    <div class="col-lg-12" style="display: flex; flex-direction: row; justify-content: space-between">
                                        <img src="#" alt="" style="width: 50px; height: 50px; border-radius: 50% ">
    
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="col-lg-12">Related Document (Highest Qualification) </label>
                                    <label class="col-lg-12" >(File extensions allowed: *.jpeg,*.jpg, *.png)</label>  <br> 
                                    <label class="col-lg-12" >(Maximum file size 2MB.)</label>
                                    <div class="col-lg-12">
                                    </div>
    
                                    <div class="col-lg-12" style="display: flex; flex-direction: row; justify-content: space-between">
                                        <img src="#" alt="" style="width: 50px; height: 50px; border-radius: 50% ">
    
                                        <input type="file" name="document">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Update Profile">
                                </div>
                            </div>


                        </form>
                </div>
            </div>
        </div>

    </div>
</div>











@endsection



@section('scripts')

@endsection