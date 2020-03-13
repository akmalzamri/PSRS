@extends('layouts.userMaster')

@section('content')
<div class="card-header">
<!--================Category Product Area =================-->

    <div class="row flex-row-reverse">
     
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status')}}
      </div>
      @endif
        <div class="product_top_bar">
          <div class="left_dorp">
          
          </div>
        </div>
        
        <div class="latest_product_inner">
 
          <div class="row">
            @foreach ($treatments as $row) 
            <div class="col-lg-4 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img
                    class="card-img"
                    src="/{{$row->photo_path}}"
                    alt=""
                  />
                  <div class="p_icon">
                    <a href="#" >

                      <i class="ti-eye"></i>
                     
                    </a>
                    <a href="{{ url('add-to-cart/'.$row->treatments_id) }}">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                 
                    <h4 class="d-block">{{ $row->treatmentname }}</h4>
                    <div class="mt-3">
                      <p>({{ $row->treatmentdescription }})</p>
                       
                    </div>
                  
                  <div class="mt-3">
                    <p>{{ $row->treatmentduration }} Hour per Session</p>
                     
                  </div>
                  <div class="mt-3">
                    <span class="mr-4">RM {{ $row->treatmentprice }}</span>
                     
                  </div>
                 
                </div>
              </div>
            </div>
            @endforeach
            
          </div>
          <div class="row-center">
            {{ $treatments->links() }} 

          </div>
<!--================End Category Product Area =================-->



@endsection
