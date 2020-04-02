@extends('layouts.userMaster')

@section('content')


<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
         
            <h3>Session Cart</h3>

            <h4>Check your cart for your session.</h4>
            <br>
            <br>
            <form class="" action={{URL::to('/booking4')}} method="post">
                {{ csrf_field() }}

                Name: {{ Auth::user()->name }} <br>
                Contact: {{ Auth::user()->contact }} <br> <br>
                Location: {{ Auth::user()->address }},  {{ Auth::user()->zipcode }}  {{ Auth::user()->city }}, {{ Auth::user()->state }},  {{ Auth::user()->country }}<br>
                
                @if($date)
                Date: {{$date}}
                <br> 
                Time: {{$time}}
                
                @else
                <p style="color:red">*Please Select Date & Time</p>
                @endif
               <br>
               <br>
               <br>

          <!--================Category Product Area =================-->
                <h5>Select Your Therapist:</h5>
                <br>
                        {{-- <div class="row">
                        @foreach ($users as $row) 
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product">
                            <div class="product-img">
                                <img class="card-img"  src="/{{$row->photo_path}}"  alt=""   style="width: 80px; height: 80px; border-radius: 50% "/>
                                <div class="p_icon">
                                
                                <a href="{{ url('add-to-cart/'.$row->id) }}">
                                    <i class="ti-shopping-cart"></i>
                                </a>
                                </div>
                            </div>
                            <div class="product-btm">
                            
                                <h4 class="d-block" align="center">{{ $row->name }}</h4>
                                
                            </div>
                          
                            
                                <div class="media-body" align="center">
                                    <input type="submit" name="therapist" class="btn btn-warning " value="Select">
                                    
                                  </div>
                           
                            </div>
                        </div>
                        @endforeach 
                    </div> --}}

                    <div class="form-group">  
                        <select name="therapist" class="form-control">
                            @foreach ($users as $row)      
                        <option name="therapist" value="{{$row->name}}">{{ $row->name }}</option>
                            @endforeach  
                        </select>         
                   </div>
                   <Br>
                    <Br>
                        <Br>
              
            <!--================End Category Product Area =================-->

            <h4>Order Summary</h4>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                    <?php $total = 0 ?>
                        @if(session('cart'))
                          @foreach(session('cart') as $treatments_id => $details)
          
                          <?php $total += $details['price'] * $details['quantity'] ?>
                      <tr>
                          <td > {{ $details['name'] }}</td>
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
            <div class="media-body">
                <input type="submit" class="btn btn-warning " value="Confirm">
                
              </div> 
        </form>
    </div>
  </div>
</section>


@endsection