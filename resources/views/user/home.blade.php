@extends('layouts.userMaster')

@section('content')
<!--================Category Product Area =================-->

    <div class="row flex-row-reverse">
      <div class="col-lg-9">
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status')}}
      </div>
      @endif
        <div class="product_top_bar">
          <div class="left_dorp">
            <select class="sorting">
              <option value="1">Default sorting</option>
              <option value="2">Default sorting 01</option>
              <option value="4">Default sorting 02</option>
            </select>
            <select class="show">
              <option value="1">Show 12</option>
              <option value="2">Show 14</option>
              <option value="4">Show 16</option>
            </select>
          </div>
        </div>
        
        <div class="latest_product_inner">
 
          <div class="row">
            @foreach ($treatments as $row) <div class="col-lg-4 col-md-6">
              <div class="single-product">
                <div class="product-img">
                  <img
                    class="card-img"
                    src="/{{$row->photo_path}}"
                    alt=""
                  />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="{{ url('add-to-cart/'.$row->treatments_id) }}" class="btn btn-success">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>{{ $row->treatmentname }}</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">RM {{ $row->treatmentprice }}</span>
                     
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            {{ $treatments->links() }} 

<!--================End Category Product Area =================-->
@endsection