@extends('layouts.userMaster')
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

                <div class="Contact_Infoemation">
                  <h4>Your Contact Information</h4>
                  <form action="confirmbooking" method="POST" >
                        {{ csrf_field() }}
                      Name: {{ Auth::user()->name }} <br>
                      Contact: {{ Auth::user()->contact }} <br> <br>
                      Location: {{ Auth::user()->address }},  {{ Auth::user()->zipcode }}  {{ Auth::user()->city }}, {{ Auth::user()->state }},  {{ Auth::user()->country }}<br>
                      
                      @if($date)
                      Date: {{$date}}
                      <br> 
                      Time: {{$time}}
                      <br> 
                      Therapist: {{$therapist}}
                      @else
                      <p style="color:red">*Please Select Date & Time</p>
                      @endif
                      
                     <br>
                     <br>
                     <br>
                      <h4>Order Summary</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                            <?php $total = 0 ?>
                            <?php $totalduration = 0 ?>
                                @if(session('cart'))
                                  @foreach(session('cart') as $treatments_id => $details)
                  
                                  <?php $total += $details['price'] * $details['quantity'] ?>
                                  <?php $totalduration += $details['duration']?>
                              <tr>
                                  <td > {{ $details['name'] }} ({{$details['duration']}} Hour)</td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td>RM {{ $details['price'] * $details['quantity'] }}</td>  
                              </tr>                              
                              @endforeach
                              @endif
                        </tbody>
                          <tfoot>
                              <tr>
                                <td><h5>Total Duration</h5></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><h5><strong> {{ $totalduration}} Hour</strong></h5></td>
                              </tr>
                              <tr>
                                <td><h4>Sub-Total</h4></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><h4><strong> RM {{ number_format($total,2) }}</strong></h4></td>
                              </tr>
                          </tfoot>
                      </table>
                    </div>  
                  <br>
                  <br>
                  <div class="Payment Method">
                    <h4>Choose Payment Method</h4>
            
                    <p>*Any Cancellation booking must be made 2 days before the booking date.</p> <br>
                      
                    <div class="col-md-12 text-left">
            
                      <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                        <li class="nav-item site-animate">
                          <a class="nav-link active" id="pills-Massage-tab" data-toggle="pill" href="#pills-Massage" role="tab" aria-controls="pills-Massage" aria-selected="true">Cash on Delivery</a>
                        </li>
                        <li class="nav-item site-animate">
                          <a class="nav-link" id="pills-Bekam-tab" data-toggle="pill" href="#pills-Bekam" role="tab" aria-controls="pills-Bekam" aria-selected="false">Internet Banking FPX</a>
                        </li>
                        
                      </ul>
            
                      <div class="tab-content text-left">
                        <div class="tab-pane fade show active" id="pills-Massage" role="tabpanel" aria-labelledby="pills-Massage-tab">
                          <div class="row">
                            <div class="col-md-6 site-animate">
                              <div class="media menu-item">
                              
                                <div class="media-body">
                                  <input type="submit" class="btn btn-warning " value="Book Now">
                                  
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
                                  data-target="#DeleteModal" ><img src="images/Maybanks.png" class="img-fluid"></a>
                                </div>
                              </div>
            
                            
                            </div>
                            <div class="col-md-3 site-animate">
            
                              <div class="media menu-item">
                              
                                <div class="media-body">
                              
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                  data-target="#DeleteModal" ><img src="images/cimbbanks.png" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 site-animate">
            
                              <div class="media menu-item">
                              
                                <div class="media-body">
                              
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                  data-target="#DeleteModal" ><img src="images/AffinBank.png" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 site-animate">
            
                              <div class="media menu-item">
                              
                                <div class="media-body">
                              
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                  data-target="#DeleteModal" ><img src="images/BankIslam.png" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 site-animate">
            
                              <div class="media menu-item">
                              
                                <div class="media-body">
                              
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                  data-target="#DeleteModal" ><img src="images/rhb.png" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 site-animate">
            
                              <div class="media menu-item">
                              
                                <div class="media-body">
                              
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                  data-target="#DeleteModal" ><img src="images/StandardCharted.png" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 site-animate">
            
                              <div class="media menu-item">
                              
                                <div class="media-body">
                              
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                  data-target="#DeleteModal" ><img src="images/PublicBank.png" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-3 site-animate">
            
                              <div class="media menu-item">
                              
                                <div class="media-body">
                              
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                  data-target="#DeleteModal" ><img src="images/Maybank2e.png" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>                          
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            
                        {{-- MODAL --}}
                  <div id="DeleteModal" class="modal fade text-success" role="dialog">
                    <div class="modal-dialog ">
                      <div class="modal-content">
                                <div class="modal-header bg-success"> </div>
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
                                            <td></td>
                                            <td></td>
                                            <td><h5>9876543210</h5></td>
                                        </tr>
                                        <tr>
                                          <td>
                                              <div class="media">
                                                <div class="media-body">
                                                    <p>Transaction Date</p>
                                                  </div>
                                              </div>
                                          </td>
                                          <td></td>
                                          <td> </td>
                                          <td>
                                              <h5>{{ date('d-m-Y H:i:s') }}  </h5>
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
                                        <td></td>
                                        <td></td>
                                        <td><h5>RM {{ number_format($total,2) }} </h5></td>
                                    </tr>
                                    <tr>
                                      <td>
                                          <div class="media">
                                              <div class="media-body">
                                                  <p>Duration</p>
                                              </div>
                                          </div>
                                      </td>
                                      <td></td>
                                      <td></td>
                                      <td><h5>{{ $totalduration }} Hour</h5></td>
                                  </tr>
                                    </tbody>
                                  </table>
                                  <div class="modal-footer">
                                    <center>
                                      <input type="submit" class="btn btn-success " value="Return to PSRS">
                                    </center>
                                </div>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                {{-- END of MODAL --}}
              </div>
            </section>
        </div> 
      </div>        
    </div>
  </div>
</div>
@endsection