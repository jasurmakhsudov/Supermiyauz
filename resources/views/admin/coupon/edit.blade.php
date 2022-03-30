@extends('layouts.master')

@section('title', 'Edit Coupon Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1>Edit Coupon</h1>
    <form action="{{route('admin.coupon.update')}}" class="form-group" method="POST">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" name="id" id="id" value="{{$coupon->id}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" value="{{$coupon->name}}">
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="discount" class="col-sm-2 col-form-label">Discount</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="discount" id="discount" value="{{$coupon->discount}}">
            </div>
        </div>
        <div class="form-group row">
          <label for="active" class="col-sm-2 col-form-label">Active</label>
          <div class="col-sm-10">
            <input type="checkbox" class="form-control" style="width: 4%" name="active" id="active" value=""{{$coupon->active?"checked":""}}>
          </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Update">
        <a class="btn btn-danger" href="{{route('admin.coupon.index')}}">Cancel</a>
    </form>
</div> 

@endsection


