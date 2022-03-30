@extends('layouts.master')

@section('title', 'Edit User Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    <h1>Edit User</h1>
    <form action="{{route('admin.user.update')}}" class="form-group" method="POST">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" name="id" id="id" value="{{$user->id}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
            </div>
        </div>
        @csrf
        {{-- @method('put') --}}
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone" id="phone" pattern="[0-9()#&+*-=.]+" value="{{$user->phone}}">
            </div>
        </div>

        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <select id="role" name="role" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{$role}}" {{!strcmp($user->role,$role)?"selected":""}}>{{$role}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <input class="btn btn-primary" type="submit" value="Update">
        <a class="btn btn-danger" href="{{route('admin.user.index')}}">Cancel</a>
    </form>
</div> 

@endsection


