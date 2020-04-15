@extends('layouts.master')



@section('title')
Register User
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Customer Bookings</h4>
                
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                </div>
                @endif
           
            </div>
           
            <div class="card-body">

                @if($bookings->isEmpty())
                
                <p> There is no customer booking</p>
                
                @else

                <div class="table-responsive">
                    <table id="datatable" class="table">
                        <thead class=" text-primary">
                           
                            <th>Booking ID</th>
                            <th> Customer Email </th>
                            <th>Date Time </th>
                            <th> Treatment </th> 
                            <th> Amount (RM)</th> 
                            <th> Treatment Duration </th> 
                        

                        </thead>
                        <tbody>
                            @foreach ($bookings as $row)
                            <tr>
                              
                                <td> {{ $row->id }}</td>
                                <td> {{ $row->user_email }}</td>
                                <td> {{ $row->booking_date }}
                                 {{ $row->booking_time }}</td>
                                 <td>  {{ json_encode($row->treatment_name) }} </td>
                                 <td> {{ $row->total_amount }}</td>
                                <td>     {{ $row->treatmentduration }}  Hour</td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                
                </div>
            </div>
        </div>
    </div>
</div>



@endsection



@section('scripts')

<script type="text/javascript">
  
     $(document).ready( function ()
     {
        $('#datatable').DataTable();
        } );
  </script>

@endsection