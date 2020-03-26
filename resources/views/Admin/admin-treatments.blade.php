@extends('layouts.master')



@section('title')
Treatments Side
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Treatments </h4>
                <a href="/admin-add-treatments" class="btn btn-success">Add Treatment</a>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                </div>
                @endif
            </div>
            <div class="card-body">
               
                @if($treatments->isEmpty())
                
                <p> There is no treatments</p>
                
                @else

                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th> ID </th>
                            <th> Name</th>
                            <th> Price (RM) </th>
                            <th> Hour </th>
                       
                            <th> Image </th>
                            <th> Action </th>
                     
                        </thead>
                        <tbody>
                            @foreach ($treatments as $row)
                            <tr>
                               

                                <td> {{ $row->treatments_id }}</td>
                                <td> {{ $row->treatmentname }}</td>        
                                <td> {{ $row->treatmentprice }}</td>
                                <td> {{ $row->treatmentduration }}</td>
                               
                                <td>   <img src="/{{$row->photo_path}}" alt="" style="width: 100px; height: 100px; "> </td>
                                <td>
                                    <a href="/admin-edit-treatments/{{ $row->treatments_id }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                               
                                <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$row->treatments_id}})" 
                                    data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    {{ $treatments->links() }} 
                   
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
         var url = "/role-delete-treatments/{treatments_id}";
         url = url.replace('{treatments_id}', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>

@endsection