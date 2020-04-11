@extends('layouts.userMaster')

@section('content')


<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4>Booking Confirmation</h4>
             <!--================Order Details Area =================-->
              <section class="order_details section-margin--small">
                <div class="container">
                    <br>
                  <br>
                  <p class="text-center billing-alert">Thank you. Your treatment booking has been received!</p> <br>
                  <p class="text-center billing-alert" style="color:red"> -Any Cancellation booking must be made 2 days before the booking date-</p>
                  <br>
                  <br>
                  <br>
                  <br>
                  <div class="row mb-5">
                    <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                      <div class="confirmation-card">
                        <h3 class="billing-title">Booking Info</h3>
                        <table class="order-rable">
                          <tr>
                            <td>Date</td>
                            <td>: ({{ $date }})</td>
                        
                          </tr>
                          <tr>
                            <td>Time</td>
                            <td>: ({{ $time }})</td>
                        
                          </tr>
                        
                        </table>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                      <div class="confirmation-card">
                        <h3 class="billing-title">Your Address Information</h3>
                        <table class="order-rable">
                          <tr>
                            <td>Street</td>
                            <td>: {{ Auth::user()->address }}</td>
                          </tr>
                          <tr>
                            <td>Postcode</td>
                            <td>: {{ Auth::user()->zipcode }} </td>
                          </tr>
                          <tr>
                            <td>City</td>
                            <td>: {{ Auth::user()->city }}</td>
                          </tr>
                          <tr>
                            <td>Country</td>
                            <td>: {{ Auth::user()->country }}</td>
                          </tr>
                        
                        </table>
                      </div>
                    </div>
                    
                  </div>
                
                </div>
              </section>
          <!--================End Order Details Area =================-->
        </div>
      </div>
    </div>
  </div>
</section>


@endsection