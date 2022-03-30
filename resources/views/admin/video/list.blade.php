@extends('layouts.master')

@section('title', 'All Videos Page')

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
    <h1>Videos <span style="float: right"><a class="btn btn-success" href="{{route('admin.video.create')}}">Create Video</a></span></h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Course</th>
                <th>Url</th>
                <th>Order</th>
                <th>Visibility</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videos as $video)
            <tr>
                <form action="{{route('admin.video.delete',['id'=>$video->id])}}" method="POST">
                    <th class="id">{{$video->id}}</th>
                    <td class="title">{{$video->title}}</td>
                    <td class="course">{{$video->course->title??""}}</td>
                    <td class="url">{{$video->url}}</td>
                    <td class="order">{{$video->order}}</td>
                    <td class="visibility text-nowrap">{{$video->visibility?"ON":"OFF"}}</td>
                    <td class="created text-nowrap">{{$video->created_at}}</td>
                    <td class="updated text-nowrap">{{$video->updated_at}}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('admin.video.edit',['id'=>$video->id])}}">Edit</a>
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
            "order": [[ 6, "desc" ]],
            "pageLength": 25
          });
    });
</script>

@endsection


