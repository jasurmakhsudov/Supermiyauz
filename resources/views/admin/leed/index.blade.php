@extends('layouts.master')

@section('title', 'All Leeds Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    @include('partials.alerts')
    <h1>All Leeds <span style="float: right"><a class="btn btn-primary"  href="{{route('admin.export.leeds')}}">Download Leeds</a></span></h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Date</th>
                <th>Status</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($leeds as $leed)
            <tr>
                <form action="{{route('admin.leed.delete',['id'=>$leed->id])}}" method="POST">
                    <td class="id">{{$leed->id}}</td>
                    <td class="name">{{$leed->name}}</td>
                    <td class="phone">{{$leed->phone}}</td>
                    <td class="course">{{$leed->course}}</td>
                    <td class="date">{{$leed->created_at}}</td>
                    <td class="status">
                        <div class="col-sm">
                            <select id="role" name="role" 
                            class="form-control @if($leed->status=="New Leed")bg-info text-white
                            @elseif($leed->status=="Called")
                                bg-secondary text-white
                            @elseif($leed->status=="No response")
                                bg-danger text-white
                            @elseif($leed->status=="Pending")
                                bg-warning text-black
                            @elseif($leed->status=="Canceled")
                                bg-danger text-white
                            @elseif($leed->status=="Confirmed")
                                bg-success text-white
                            @endif
                            ">
                                @foreach ($roles as $role)
                                    <option value="{{$role}}" {{!strcmp($leed->status,$role)?"selected":""}}>{{$role}}</option>
                                @endforeach
                            </select>
                        </div>
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
            "order": [[ 4, "desc" ]],
            "pageLength": 25
          });
    });
</script>

@endsection


