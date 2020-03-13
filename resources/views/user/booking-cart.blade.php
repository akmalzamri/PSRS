@extends('layouts.userMaster')

@section('content')


<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div>
                <h4>Check your cart and select Time and Date for your session.</h4>
                
                <?php $total = 0 ?>
             
                @if(session('cart'))
                <form class="" action={{URL::to('/booking4')}} method="post">
                    {{ csrf_field() }}
                <table class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th style="width:50%">Date:                
                            <div class="form-group">
                                <input type="date"  name="date" value="" class="form-control">
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
                                                <option></option>
                                                <option name="time" value="10:00">10:00 am</option>
                                                <option name="time" value="12:00">12:00 pm</option>
                                                <option name="time" value="15:00">15:00 pm</option>
                                                <option name="time" value="18:00">18:00 pm</option>
                                            </select>         
                                </div>
                            </th>
                        </tr>
                    </tbody>  
                </table>   
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                    <tr>
                        <th style="width:50%">Product</th>
                        <th style="width:10%">Price</th>
                        <th style="width:8%"></th>
                        <th style="width:22%" class="text-center">Subtotal</th>
                        <th style="width:10%"></th>
                    </tr>
                    </thead>
                    <tbody>
             
                        @foreach(session('cart') as $treatments_id => $details)
             
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                  
                                        <h4 class="nomargin">{{ $details['name'] }}</h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">RM {{ $details['price'] }}</td>
                            <td data-th="Quantity">
                            </td>
                            <td data-th="Subtotal" class="text-center">RM {{ $details['price'] * $details['quantity'] }}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $treatments_id }}"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        
                
                    @endforeach
                       
                </tbody>
                <tfoot>
               
                <tr>
                    <td><a href="/home">Add More...</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><h4><strong>Total RM {{ $total }}</strong></h4></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td></td>
                    <td><button type="submit" name="button" class="btn btn-warning">Proceed <i class="fa fa-angle-right"></i></button></td>
                </tr>

                </tfoot>
                @else
                <p style="color:red">*Please Choose Any Treatment Before Make Any Booking</p> <br>
                <td><a href="/home" class="btn btn-warning"><i class="fa fa-angle-left"></i> Add Treatment</a></td>
            @endif
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