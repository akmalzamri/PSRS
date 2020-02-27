@extends('navigationbar.nav')

@section('content')


<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
        
             <!--================Order Details Area =================-->
  <section class="order_details section-margin--small">
    <div class="container"> 
      <div class="order_details_table">
        <h4>Order Summary</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Total Price</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">  
                  
                  <?php $total = 0 ?>
                  @if(session('cart'))
                  @foreach(session('cart') as $treatments_id => $details)
        
                  <?php $total += $details['price']?>

                    <h5>RM {{ $total }}</h5>

                    @endforeach
                  @endif</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="media">
                          
                            <div class="media-body">
                                <p>Grand Total (RM)</p>
                            </div>
                        </div>
                    </td>
                    <td>     </td>
                    <td>     </td>
                    <td>
                        <h5>  <?php $total = 0 ?>
                          @if(session('cart'))
                          @foreach(session('cart') as $treatments_id => $details)
                
                          <?php $total += $details['price']?>
        
                            <h5>RM {{ $total }}</h5>
        
                            @endforeach
                          @endif</th></h5>
                    </td>
                </tr>
               
               
             
            </tbody>
          </table>
        </div>
      </div>

      <div class="Contact_Infoemation">
        <h4>Your Contact Information</h4>
        Name: {{ Auth::user()->name }} <br>
        Email: {{ Auth::user()->email }} <br>
        Contact: {{ Auth::user()->contact }}
      </div>

      <br>
      <br>
      <div class="Payment Method">
        <h4>Choose Payment Method</h4>


        <div class="col-md-12 text-left">

          <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
            <li class="nav-item site-animate">
              <a class="nav-link active" id="pills-Massage-tab" data-toggle="pill" href="#pills-Massage" role="tab" aria-controls="pills-Massage" aria-selected="true">Cash on Delivery</a>
            </li>
            <li class="nav-item site-animate">
              <a class="nav-link" id="pills-Bekam-tab" data-toggle="pill" href="#pills-Bekam" role="tab" aria-controls="pills-Bekam" aria-selected="false">Internet Banking</a>
            </li>
            
          </ul>

          <div class="tab-content text-left">
            <div class="tab-pane fade show active" id="pills-Massage" role="tabpanel" aria-labelledby="pills-Massage-tab">
              <div class="row">
                <div class="col-md-6 site-animate">
                  <div class="media menu-item">
                   
                    <div class="media-body">
                      <a href="/receipt" class="btn btn-success">Make a Payment</a>
                    </div>
                  </div>
                </div>            
              </div>
            </div>
            <div class="tab-pane fade" id="pills-Bekam" role="tabpanel" aria-labelledby="pills-Bekam-tab">
              <div class="row">
                <div class="col-md-3 site-animate">

                  <div class="media menu-item">
                   
                    <div class="media-body">
                     
                      
                      <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                      data-target="#DeleteModal" ><img src="images/maybank.png" class="img-fluid"></a>
                    </div>
                  </div>

                 
                </div>
                <div class="col-md-3 site-animate">

                  <div class="media menu-item">
                   
                    <div class="media-body">
                   
                      <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                      data-target="#DeleteModal" ><img src="images/cimbbank.png" class="img-fluid"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-Rehab" role="tabpanel" aria-labelledby="pills-Rehab-tab">
              <div class="row">
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
              
                    <div class="media-body">
                      <h5 class="mt-0">1 Session</h5>
                      <p>45 minutes max.</p>
                      <h6 class="text-primary menu-price">RM 50</h6>
                    </div>
                  </div>


                </div>
                <div class="col-md-6 site-animate">

                  <div class="media menu-item">
                 
                    <div class="media-body">
                      <h5 class="mt-0">2 Session</h5>
                      <p>30 minutes max.</p>
                      <h6 class="text-primary menu-price">RM 25</h6>
                    </div>
                  </div>

                </div>
              </div>
            </div>
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

<div id="DeleteModal" class="modal fade text-success" role="dialog">
  <div class="modal-dialog ">
      <!-- Modal content-->
      <form action="" id="deleteForm" method="post">
          <div class="modal-content">
              <div class="modal-header bg-success">
        
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th >Status</th>
                      <th ></th>
                      <th ></th>
                      <th class="text-success">Successfull</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>
                              <div class="media">
                                
                                  <div class="media-body">
                                      <p>Reference Number</p>
                                  </div>
                              </div>
                          </td>
                          <td>     </td>
                          <td>     </td>
                          <td>
                              <h5>9876543210</h5>
                          </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="media">
                              
                                <div class="media-body">
                                    <p>Transaction Date</p>
                                </div>
                            </div>
                        </td>
                        <td>     </td>
                        <td>     </td>
                        <td>
                            <h5>03 Feb 2020 21:30:55</h5>
                        </td>
                    </tr>
                    <tr>
                      <td>
                          <div class="media">
                            
                              <div class="media-body">
                                  <p>Amount</p>
                              </div>
                          </div>
                      </td>
                      <td>     </td>
                      <td>     </td>
                      <td>
                          <h5>RM 100.00</h5>
                      </td>
                  </tr>
                  
                  
                     
                     
                   
                  </tbody>
                </table>

                <div class="modal-footer">
                  <center>
                 <a href="/receipt" class="btn btn-success">Return to PSRS</a>
                      
                  </center>
              </div>
              </div>
          </div>
      </form>
  </div>
</div>
@endsection