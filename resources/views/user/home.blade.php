@extends('navigationbar.nav')

@section('content')

<section class="lattest-product-area pb-40 category-list">
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status')}}
          </div>
          @endif
   <!-- Start Best Seller -->
    <tr>
      <td>
        @foreach ($treatments as $row)
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card text-center card-product">
                <div class="card-product__img">
                  <img class="card-img" src="/{{$row->photo_path}}" alt="">
                  
                </div>
                <div class="card-body">
                  <h4 class="card-product__title">{{ $row->treatmentname }}</h4>
                  <p class="card-product__price">RM {{ $row->treatmentprice }}</p>
                  <a href="{{ url('add-to-cart/'.$row->treatments_id) }}" class="btn btn-success">Add to Cart</a>
                 
                </div>
              </div>
            </div>
          </div>
          
     @endforeach
      </td>
    </tr>
          {{ $treatments->links() }} 
                <!-- End Best Seller -->
        </div>
      </div>
    </div>
  </div>
</section>

@endsection