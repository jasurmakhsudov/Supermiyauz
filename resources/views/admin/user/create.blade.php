@extends('layouts.master')

@section('title', 'Create User Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Flexbox container for aligning the toasts -->

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<div class="container">
    <h1>Create User</h1>
    <form action="{{route('admin.user.store')}}" class="form-group" method="POST">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" pattern="\D{2,}"  title="Name should contain at least 2 letters and no numbers" required>
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="phone" id="phone" pattern="\d{9,12}" maxlength="12" onkeypress="javascript:return isPhone(event)" value="{{old('phone')}}" title="Format should be 998991234567 or 991234567" required>
              @if($errors->has('phone'))
                <span style="color:red">{{$errors->first('phone')}}  This number already exists</span>
              @endif
            </div>
            
        </div>
        <script>
        function isPhone(e) {
            e = (e) ? e : window.event;
            var charCode = (e.which) ? e.which : e.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }
        </script>

        <div class="form-group row">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <select id="role" name="role" class="form-control" required>
                  <option disabled selected value>-</option>
                    @foreach ($roles as $role)
                        <option value="{{$role}}">{{$role}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input class="btn btn-success" type="submit" value="Create">
        <a class="btn btn-danger" href="{{route('admin.user.index')}}">Cancel</a>
    </form>
</div> 

@endsection


