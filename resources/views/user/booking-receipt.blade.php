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
      <p class="text-center billing-alert">Thank you. Your treatment booking has been received.</p>
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
                <td>: 60235</td>
              </tr>
              <tr>
                <td>Date</td>
                <td>: Oct 03, 2020</td>
              </tr>
             
              <tr>
                <td>Payment method</td>
                <td>: Cash On Delivery</td>
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
                <td>: No. 9, JLN Impian Makmur</td>
              </tr>
              <tr>
                <td>City</td>
                <td>: Kajang</td>
              </tr>
              <tr>
                <td>Country</td>
                <td>: Malaysia</td>
              </tr>
              <tr>
                <td>Postcode</td>
                <td>: 43000</td>
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
              <div class="checkout_btn_inner d-flex align-items-right">
                 
                  <a href="#" class="btn btn-warning">Save as PDF</a>
                 
              </div>
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