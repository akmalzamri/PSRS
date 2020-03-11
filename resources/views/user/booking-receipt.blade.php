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
      <p class="text-center billing-alert"> Any Cancellation booking must be made 2 days before the booking date.</p>
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
                <td>Booking number</td>
                <td>: </td>
              </tr>
              <tr>
                <td>Date</td>
                <td>: ({{ date('d-m-Y') }})</td>
             
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
      <div class="order_details_table">
        <h2>Order Details</h2>
        <div class="table-responsive">
          <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">Treatment</th>
                <th style="width:10%"></th>
                <th style="width:8%"></th>
                <th style="width:22%" class="text-center">Price</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
      
            <?php $total = 0 ?>
      
            @if(session('cart'))
                @foreach(session('cart') as $treatments_id => $details)
      
                <?php $total += $details['price']?>
      
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td></td>
                        <td data-th="Quantity"> 
                          
                        </td>
                        <td data-th="Price" class="text-center">RM {{ number_format($details['price'],2) }}</td>
                       
                    </tr>
                @endforeach
            @endif
      
            </tbody>
            <td>
             
            </td>
        </table>
         
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