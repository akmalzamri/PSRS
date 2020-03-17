@extends('layouts.master')



@section('title')
View Details Therapist
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Details New Therapist</h3>

                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="/register-new-therapist-update/{{ $therapist->id }}" method="POST"> 
                          
                                {{csrf_field()}}
                            {{method_field('PUT')}}
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Give Role</label>
                                        <select name="status" class="form-control">
                                            <option>-Please Select-</option>
                                            <option value="1">Approve</option>
                                          
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <img class=" border-gray" src="/{{$therapist->photo_path}}"  alt="..." placeholder="Not Update yet" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Related Document</label>
                                        <img class=" border-gray" src="/{{$therapist->document_path}}"  alt="..." placeholder="Not Update yet" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->name }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->gender }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>ID Type</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->idtype }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>ID Number</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->idnumber }}" disabled>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->address }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->city }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->zipcode }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->state }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->country }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="text" class="form-control" placeholder="Not Update yet" value="{{ $therapist->contact }}" disabled>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success"> Update </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')

@endsection