@extends('layouts.therapistnavbar')



@section('title')
View Booking
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>View Booking Details</h3>
                </div>
                <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Customer Name</label>
                                <input type="message" class="form-control" value="{{ $bookings->user_name }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Customer Email</label>
                                <input type="message" class="form-control" value="{{ $bookings->user_email }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Customer Contact</label>
                                <input type="message" class="form-control" value="{{ $bookings->user_contact }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Booking date</label>
                                <input type="message" class="form-control" value="{{ $bookings->booking_date }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Booking time</label>
                                <input type="message" class="form-control" value="{{ $bookings->booking_time }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Treatment</label>
                                <input type="message" class="form-control" value="{{ $bookings->treatment_name }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
                
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card">
              <div class="card-header">
                    <h3>Sent Message</h3>

                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="/therapistmanagebooking" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input type="text" name="email" value="{{ $bookings->user_email }}" class="form-control">
                              
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label>Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control">{{ old('message') }}</textarea>
                                   
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <button type="submit" class="btn btn-block btn-primary "> Sent Message</button>
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