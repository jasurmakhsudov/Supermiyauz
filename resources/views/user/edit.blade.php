@extends('layouts.master')

@section('title', 'Mening Ma\'lumotlarim')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    @include('partials.alerts')
    <h1>Ma'lumotlarni o'zgartirish</h1>
    <form action="{{route('user.update')}}" class="form-group" method="POST">
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Id raqami</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" name="id" id="id" value="{{$user->id}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Ism</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}" readonly>
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Telefon raqam</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone" id="phone" pattern="[0-9()#&+*-=.]+" value="{{$user->phone}}" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">Pozitsiya</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="role" id="role" value="{{$user->role}}" disabled>
            </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Parol</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="password" id="password" value="">
          </div>
        </div>

        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Parolni takrorlash</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="confirm_password" id="confirm_password" value="">
          </div>
        </div>
        
        <input class="btn btn-primary" type="submit" value="O'zgartirish">
        <a class="btn btn-danger" href="{{route('user.dashboard')}}">Bekor qilish</a>
    </form>
</div> 

@endsection


