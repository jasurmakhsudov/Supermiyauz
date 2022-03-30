@extends('layouts.master')

@section('title', 'Edit Permission Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    <h1>Edit Permission</h1>
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
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone" id="phone" pattern="[0-9()#&+*-=.]+" value="{{$user->phone}}">
            </div>
        </div>
        
        {{-- <label for="invoice">To'lov qilish</label> --}}
        {{-- <iframe id="invoice" src="https://oplata.kapitalbank.uz?cash=e46c15bde03346a3ba14dbb6f47f7423&description=Supermiya%20kursi&amount=49700000&URL=google.com"></iframe> --}}
        {{-- <p class="center"><a style="color: red; text-align:center;" href="" id="link">Pay</a><br></p> --}}
        {{-- <label for="referal">Sizni Supermiyaga kim taklif qildi?</label>
        <input type="text" name="referral" id="referral" placeholder="" value={{$user->referral}}> --}}

        {{-- <label for="invoice">To`lovingiz chekini kiriting <span class="symbol">*</span></label>
        <input type="file" name="invoice" id="invoice"> --}}

        {{-- <input type="hidden" name="leed_id" value="{{$leed_id?$leed_id:""}}"> --}}
        {{-- <input type="hidden" name="course_id" value="1"> --}}
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


