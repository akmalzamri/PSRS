@extends('layouts.master')



@section('title')
Edit Treatment
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Treatment</h3>

                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="/admin-update-treatments/{{$treatments->treatments_id}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            {{method_field('PUT')}}

                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="treatmentname" class="form-control" value="{{ $treatments->treatmentname }}">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Price (RM)</label>
                                        <input type="text" name="treatmentprice" class="form-control" value="{{ $treatments->treatmentprice }}">
                                    </div>
                                </div>
                                <div class="col-md-3 px-1">
                                    <div class="form-group">
                                        <label>Duration (Min)</label>
                                        <input type="text" name="treatmentduration" class="form-control" value="{{ $treatments->treatmentduration }}">
                                    </div>
                                </div>
    
                            </div>
    
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="treatmentdescription" class="form-control" value="{{ $treatments->treatmentdescription }}">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="" class="col-lg-12">Treatment Photo</label>
    
                                    <div class="col-lg-12">
                                    </div>
                                    <div class="col-lg-12" style="display: flex; flex-direction: row; justify-content: space-between">
                                        <img class=" border-gray" src="/{{$treatments->photo_path}}" alt="" style="width: 250px; height: 200px;">
           
                                    </div>  
    
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <input type="submit" class="btn btn-primary " value="Update">
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