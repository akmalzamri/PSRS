@extends('navigationbar.nav')

@section('content')


<section class="page-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <h4>My Comming Bookings</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th> No </th>
                        <th> Booking Datetime</th>
                        <th>  </th>
                        <th>  </th>
                        <th>  </th>
                        <th> Requires Action </th>
                 
                    </thead>
                    <tbody>
                       
                        <tr>
                           

                            <td> 1 </td>
                            <td>03 February 2020</td>        
                            <td> Pending </td>
                            <td> </td>
                            <td>   </td>
                            <td>
                              
                           
                            <a href="javascript:;" data-toggle="modal" onclick="deleteData()" 
                                data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i> </a>
                            </td>
                        </tr>
               
                    </tbody>
                </table>             
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
                  
                    <p class="text-center">Are You Sure Want To Cancel Booking ?</p>
                </div>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Yes, Cancel my booking</button>
                    
                    </center>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')

@endsection