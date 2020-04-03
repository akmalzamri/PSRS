@extends('layouts.therapistnavbar')



@section('title')
    Dashboard 
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              
              <div class="card-header">
                <h4 class="card-title">Customer Bookings</h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                </div>
                @endif

              </div>
              <div class="card-body">
               
                @if(Auth::user()->status == '0')
                
                <p style="color:red">(Your Account need to be approve by admin. Thank you)</p>
                

                @elseif($bookings->isEmpty())
                <p> There is no Customer Booking</p>
                @else
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                           
                            <th> Customer Name </th>
                            <th>Date</th>
                            <th> Time </th>  
                            <th> Contact </th>                           
                            <th>Action</th>

                        </thead>
                        <tbody>
                            @foreach ($bookings as $row)
                            <tr>
                             
                                <td>{{ $row->user_name }}</td>   
                                <td> {{ $row->booking_date }}</td>
                                <td> {{ $row->booking_time }}</td>
                                <td> {{ $row->user_contact }}</td>
                                <td>     <a href="therapist-view-booking/{{ $row->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
 
                              </td>                           
                                            
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
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                
              </div>
           
            </div>
          </div>
        </div>

@endsection



@section('scripts')

@endsection