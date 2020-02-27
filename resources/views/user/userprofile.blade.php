@extends('layouts.userMaster')

@section('content')


<section class="page-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header">

            <!-- BAHAGIAN POST ENQUIRIES PAGE -->

            <div class="col-lg-8 mb-5">
                <h4 class="card-title">My Profile</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                </div>
                @endif
                <form action="#" method="POST">

                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->name }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->gender }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>ID Type</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->idtype }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>ID Number</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->idnumber }}" disabled>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->address }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->city }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->zipcode }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->state }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->country }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $users->contact }}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="col-lg-12">Profile Photo</label>

                            </div>
                        </div>
                       
                            <div class="col-lg-12" style="display: flex; flex-direction: row; justify-content: space-between">
                                <img class=" border-gray" src="/{{$users->photo_path}}" alt="" style="width: 250px; height: 200px;">
   
                            </div>                                      
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 mr-auto">
                            <a href="/userprofile-update" class="btn btn-block btn-primary text-white py-3 px-5">Update My Profile</a>

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
</div>
</section>


@endsection