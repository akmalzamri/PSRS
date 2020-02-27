@extends('layouts.therapistnavbar')



@section('title')
    Dashboard 
@endsection


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Customer Bookings</h4>
              </div>
              <div class="card-body">
                @if($bookings->isEmpty())
                
                <p> There is no enquiries</p>
                
                @else
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th> Customer Name </th>
                            <th>Date</th>
                            <th> Time </th>                            
                            <th> Customer Address </th>

                        </thead>
                        <tbody>
                            @foreach ($bookings as $row)
                            <tr>
                                <td> {{ $row->bookings_id }}</td>
                                <td> Akmal Zamri </td>   
                                <td> {{ $row->booking_date }}</td>
                                <td> {{ $row->booking_time }}</td>
                                <td>  No. 9, JLN Impian Makmur 4/1, Saujana Impian</td>                           
                                            
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    {{ $bookings->links() }} 
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