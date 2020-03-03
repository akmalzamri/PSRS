@extends('layouts.userMaster')

@section('content')


<section class="page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Check your cart and select Time and Date for your session.</h4>
            <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Date:                
                        <div class="form-group">
                            <input type="date" class="form-control">
                        </div>
                    </th> <br>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>   
                    <tr>
                        <th style="width:50%">Time:          
                            <div class="form-group">    
                                <select name="time" class="form-control">
                                        <option value="" disabled></option>
                                        <option value="9.00">9.00 am</option>
                                        <option value="12.00">12.00 pm</option>
                                        <option value="3.00">3.00 pm</option>
                                        <option value="6.00">6.00 pm</option>
                                </select>
                            </div>
                        </th>
                    </tr>
                </tbody>  
            </table>   
          </div>
        </div>
      </div>
    </div>
</section>

<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div>
                <h4>Cart</h4>
                Name: {{ Auth::user()->name }} <br>
                Contact: {{ Auth::user()->contact }} <br> <br>
                Location: {{ Auth::user()->address }},  {{ Auth::user()->zipcode }}  {{ Auth::user()->city }}, {{ Auth::user()->state }},  {{ Auth::user()->country }}<br>
           
                    Date: <br> 
                
                    Time: <br> 

           
                <table id="cart" class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Treatment</th>
                    <th style="width:10%"></th>
                    <th style="width:8%"></th>
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
                            <td></td>                         
                            <td></td>
                            <td></td>  
                            <td data-th="Price" class="text-center">RM {{ number_format($details['price'],2) }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $treatments_id }}"><i class="fa fa-trash-o"></i></button>
                            </td>    
                        </tr>
                    @endforeach
                @endif
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="hidden-xs text-center"><h4>Total RM{{ $total }}</h4></td>
                <td></td> 
                </tbody>
                <tfoot>
                    <tr>
                        <td><a href="/home" class="btn btn-warning"><i class="fa fa-angle-left"></i> Add Another Treatment</a></td>
                        <td ></td>
                        <td></td>
                        <td ></td>
                        <td></td>
                        <td><a href="/booking4" class="btn btn-warning"><i class="fa fa-angle-right"></i> Make Payment </a></td>
                    </tr>
                </tfoot>
            </table> 
        </div>
      </div>
    </div>
  </div>
</section>


@endsection

@section('scripts')


    <script type="text/javascript">

       

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection