@extends('layouts.master')



@section('title')
Edit Register
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Register User</h3>
            
                </div>
                <div class="card-body">
                    <div class="col-md-6">
                        <form action="/role-register-update/{{ $users->id }}" method="POST">

                            {{csrf_field()}}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" value="{{ $users->name }}" name="username">
                            </div>
                            <div class="form-group">
                                <label>Give Role</label>
                                <select name="usertype" class="form-control">
                                    <option>-Please Select-</option>
                                    <option value="2">Admin</option>
                                    <option value="1">Therapist</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success"> Update </button>
                            <a href="/role-register" class="btn btn-danger"> Cancel </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')

@endsection