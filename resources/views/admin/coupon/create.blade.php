@extends('layouts.master')

@section('title', 'Create Coupon Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    <h1>Create User</h1>
    <form action="{{route('admin.coupon.store')}}" class="form-group" method="POST">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" pattern="\D{2,}"  title="Name should contain at least 2 letters and no numbers" required>
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Coupon Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="code" id="code" value="{{old('code')}}" required>
              @if($errors->has('code'))
                <span style="color:red">{{$errors->first('code')}} This code already exists</span>
              @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="discount" class="col-sm-2 col-form-label">Discount</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="discount" min=0 max=100 id="discount" value="{{old('discount')}}" required>
            </div>
        </div>
        <input class="btn btn-success" type="submit" value="Create">
        <a class="btn btn-danger" href="{{route('admin.coupon.index')}}">Cancel</a>
    </form>
</div> 

@endsection


