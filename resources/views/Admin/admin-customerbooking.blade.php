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
                    <table class="table">
                        <thead class=" text-primary">
                           
                            <th>Booking ID</th>
                            <th> Customer Name </th>
                            <th>Date Time </th>
                                                       
                            <th> Customer Address </th>
                            <th> Status </th> 
                            <th> Action </th>

                        </thead>
                        <tbody>
                            @foreach ($bookings as $row)
                            <tr>
                              
                                <td> {{ $row->id }}</td>
                                <td> {{ $row->user_id }}</td>
                                <td> {{ $row->booking_date }}
                                 {{ $row->booking_time }}</td>
                                 <td> </td>
                                
                                <td> @if($row->status==0)
                                    <p class="badge badge-warning">Book</p>
                                    @elseif($row->status==1)
                                    <p class="badge badge-danger">Pending</p>
                                    @else
                                    -Nothing to show-
                                    @endif
                                </td>
                                <td>
                              

                                    {{-- <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$row->id}})" 
                                    data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> </a> --}}
                     
                                 
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

<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
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
     function deleteData(id)
     {
         var id = id;
         var url = "/role-delete/{id}";
         url = url.replace('{id}', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>

@endsection