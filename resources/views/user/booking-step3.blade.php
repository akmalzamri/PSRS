@extends('layouts.userMaster')

@section('title')
    Details Rcenter
@endsection


@section('content')
    
<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
               
                <div class="s_product_text">
                  <img
                  class="card-img"
                  src="/{{$treatment->photo_path}}"
                  alt=""
                />
               
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                 
                <h3>{{$treatment->treatmentname}}</h3>
                    <h2>RM {{$treatment->treatmentprice}} / {{$treatment->treatmentduration}} Hour</h2>
                   
                    <p>{{$treatment->treatmentdescription}}</p>
                    {{-- <div class="product_count">
          
                        <a class="button primary-btn" href="/cart">Add to Cart</a>               
                    </div> --}}
                    {{-- <div class="card_area d-flex align-items-center">
                        <a class="icon_btn" href="#">Add to Cart</a>
                        {{-- <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a> --}}
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->



@endsection
@section('scripts')

@endsection