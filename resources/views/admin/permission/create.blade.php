@extends('layouts.master')

@section('title', 'Create Permission Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />


<div class="container">
    <h1>Create Permission</h1>
    <form action="{{route('admin.permission.store')}}" class="form-group" method="POST">
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">User</label>
            <div class="col-sm-10">
                <select id="user_id" name="user_id" class="form-control" data-live-search="true" required>
                  {{-- <option disabled selected value="">-</option> --}}
                  <option value="">Select a user</option>
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->name}} - {{$user->phone}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="course_id" class="col-sm-2 col-form-label">Course</label>
            <div class="col-sm-10">
                <select id="course_id" name="course_id" class="form-control" required>
                    <option value="">Select a course</option>
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="transaction" class="col-sm-2 col-form-label">Transaction</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="transaction" id="transaction" value="" placeholder="Not Mandatory">
            </div>
        </div>
        @csrf
        
        <input class="btn btn-success" type="submit" value="Create">
        <a class="btn btn-danger" href="{{route('admin.permission.index')}}">Cancel</a>
    </form>
</div> 

<script>
    $(document).ready(function () {
        $('select').selectize({
            sortField: 'text'
        });
    });
</script>

@endsection


