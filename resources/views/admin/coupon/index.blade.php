@extends('layouts.master')

@section('title', 'All Coupons Page')

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
    <h1>Coupons <span style="float: right"><a class="btn btn-success" href="{{route('admin.coupon.create')}}">Create Coupon</a></span></h1>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Code</th>
                <th>Discount</th>
                <th>Total used</th>
                <th>Active</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupon)
            <tr>
                <form action="{{route('admin.coupon.delete',['id'=>$coupon->id])}}" method="POST">
                    <td class="id">{{$coupon->id}}</td>
                    <td class="name">{{$coupon->name}}</td>
                    <td class="code">{{$coupon->code}}</td>
                    <td class="discount">{{$coupon->discount}}</td>
                    <td class="total">{{count($coupon->transactions)}}</td>
                    <td class="active">{{$coupon->active?"Active":"Inactive"}}</td>
                    <td class="date">{{$coupon->created_at}}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{route('admin.coupon.edit',['id'=>$coupon->id])}}">Edit</a>
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


