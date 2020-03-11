@extends('layouts.userMaster')

@section('content')


<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4>My Comming Bookings</h4> <br>
            Cancellation Remark <br>

            Any Cancellation booking must be made 2 days before the booking date. <br>
                      
       
            <br>

            @if($managebookings->isEmpty())
                
            <p> There is no Comming Treatments</p>
            
            @else
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th> Booking ID </th>
                        <th> Booking Date</th>
                        <th> Booking Time</th>
                        <th> Treatments ID </th>
                        <th> Status </th>
                        <th> Requires Action </th>
                 
                    </thead>
                    <tbody>
                        @foreach ($managebookings as $row)
                        <tr>
                           

                            <td>  {{ $row->id }} </td>
                            <td>  {{ $row->booking_date }}</td>        
                            <td>  {{ $row->booking_time }} </td>
                            <td>  {{ $row->treatments_id }} </td>
                            <td>  Pending </td>
                            <td>
                               
                                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$row->id}})" 
                                    data-target="#DeleteModal" class="btn btn-s btn-danger">Cancel Booking </a>
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
</section>
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                 
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
        var url = "/remove-from-booking/{id}";
        url = url.replace('{id}', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit()
    {
        $("#deleteForm").submit();
    }


 </script>


@endsection