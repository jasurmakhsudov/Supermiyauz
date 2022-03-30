@extends('layouts.master')

@section('title', 'All Users Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<style>
    .table-wrap{
        overflow-x:scroll;
        width:100%;
    }
</style>
<div class="table-wrap">
    @include('partials.alerts')
    <h1>Users <span style="float: right"><a class="btn btn-primary"  href="{{route('admin.export.users')}}">Download Users</a> <a class="btn btn-success" href="{{route('admin.user.create')}}">Add User</a></span></h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Password</th>
                <th>Role</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <form action="{{route('admin.user.delete',['id'=>$user->id])}}" method="POST">
                    <th class="id">{{$user->id}}</th>
                    <td class="name">{{$user->name}}</td>
                    <td class="phone">{{$user->phone}}</td>
                    <td class="password">*******</td>
                    <td class="role">{{$user->role}}</td>
                    <td class="role">{{$user->created_at}}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('admin.user.edit',['id'=>$user->id])}}">Edit</a>
                    </td>
                    <td>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?');" type="submit">Delete</button>
                    </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> 

<script>
    $(document).ready(function() {
          $('#dataTable').DataTable({
            "order": [[ 5, "desc" ]],
            "pageLength": 25
          });
    });
</script>

@endsection


