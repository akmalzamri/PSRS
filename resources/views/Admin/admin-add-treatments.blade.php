@extends('layouts.master')



@section('title')
Dashboard
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Add Treatments</h4>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <form action="admin-add-treatments" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="treatmentname" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Price (RM)</label>
                                    <input type="text" name="treatmentprice" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Hour </label>
                                    <input type="text" name="treatmentduration" class="form-control" value="">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="treatmentdescription" class="form-control" value="">
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

                        <div class="form-group row">
                            <div class="col-md-6 mr-auto">
                                <input type="submit" class="btn btn-primary " value="Add Treatment">
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