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
                                  <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$row->id}})" data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> </a>
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



        <div id="DeleteModal" class="modal fade text-danger" role="dialog">
          <div class="modal-dialog ">
              <!-- Modal content-->
              <form action="" id="deleteForm" method="post">
                  <div class="modal-content">
                      <div class="modal-header bg-danger">
                          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                          <h4 class=" ">DELETE ENQUIRIES</h4>
                      </div>
                      <div class="modal-body">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <p class="text-center">Are You Sure Want To Delete ?</p>
                          
                      </div>
                      <div class="modal-footer">
                          <center>
                              <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                              <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                          </center>
                      </div>
                  </div>
              </form>
          </div>
      </div>

@endsection



@section('scripts')

<script type="text/javascript">
function deleteData(id) {
  var id = id;
  var url = "/role-delete-booking/{id}";
  url = url.replace('{id}', id);
  $("#deleteForm").attr('action', url);
}

function formSubmit() {
  $("#deleteForm").submit();
}
</script>

@endsection