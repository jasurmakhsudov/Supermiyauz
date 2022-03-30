@extends('layouts.master')

@section('title', 'All Permissions Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    @include('partials.alerts')
    <h1>Permissions <span style="float: right"><a class="btn btn-success" href="{{route('admin.permission.create')}}">Create Permission</a></span></h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Transaction</th>
                <th>Date</th>
                {{-- <th>Edit</th> --}}
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
            <tr>
                <form action="{{route('admin.permission.delete',['id'=>$permission->id])}}" method="POST">
                    <td class="id">{{$permission->id}}</td>
                    <td class="name">{{$permission->user->name}}</td>
                    <td class="phone">{{$permission->user->phone}}</td>
                    <td class="course">{{$permission->course->title}}</td>
                    <td class="transaction">
                        @if($permission->transaction)
                            {{$permission->transaction->id}}
                            @endif
                    </td>
                    <td class="date">{{$permission->created_at}}</td>
                    {{-- <td>
                        <a class="btn btn-secondary" href="{{route('admin.permission.edit',['id'=>$permission->id])}}">Edit</a>
                    </td> --}}
                    <td>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger"  onclick="return confirm('Are you sure you want to delete?');" type="submit">Delete</button>
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


