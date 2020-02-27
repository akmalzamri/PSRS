@extends('layouts.master')



@section('title')
View Message
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Message</h3>
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="message" class="form-control" value="{{ $enquiries->message }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
              <div class="card-header">
                    <h3>Reply Message</h3>

                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="/admin-view-enquiries" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input type="text" name="email" value="{{ $enquiries->email }}" class="form-control">
                                    <!-- <input type="text" class="form-control" value="{{ ('email') }}" name="email" > -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
                                    <!-- <input name="message" class="form-control" id="message-text" cols="30" rows="10"></input> -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <button type="submit" class="btn btn-block btn-primary "> Reply Enquiries</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
           
            </div>
          </div>
    </div>
</div>



@endsection

@section('scripts')

@endsection