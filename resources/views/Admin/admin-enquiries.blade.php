@extends('layouts.master')



@section('title')
Enquiries Side
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Enquiries </h4>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                </div>
                @endif
            </div>
            <div class="card-body">
                @if($enquiries->isEmpty())
                
                <p> There is no enquiries</p>
                
                @else
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th> Email </th>
                            <th> Action </th>
                            <th> </th>

                        </thead>
                        <tbody>
                            @foreach ($enquiries as $row)
                            <tr>
                                <td> {{ $row->id }}</td>
                                <td> {{ $row->name }}</td>
                                <td> {{ $row->email }}</td>
                                <td>
                                    <a href="/admin-view-enquiries/{{ $row->id }}" class="btn btn-success"><i class="fa fa-eye"></i></a>

                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$row->id}})" data-target="#DeleteModal" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                    {{ $enquiries->links() }} 
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
        var url = "/role-delete-enquiries/{id}";
        url = url.replace('{id}', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }
</script>

@endsection