@extends('layouts.master')

<script src=
"https://code.jquery.com/jquery-3.2.1.slim.min.js" 
  integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
  crossorigin="anonymous">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
  integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous">
</script>

@section('title', 'All Courses Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Flexbox container for aligning the toasts -->

<!-- Bootstrap core JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Page level plugin JavaScript--><script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<style>
  .flex-container{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin:0px 10px;
}

.flex-child{
    width: 400px;
    margin: 30px 0px;
    border: 5px solid #3ca9e2;
    border-radius: 50px;
    text-align: center;
    height: 100%;
}
img{
  border-radius: 50px;
  width: 100%;
  padding: 5px;
}
</style>

<div class="container">
    @include('partials.alerts')
    <h1>Courses <span style="float: right"><a class="btn btn-success" href="{{route('admin.course.create')}}">Create</a></span></h1>
    <div class="flex-container">
      @foreach ($courses as $course)
        <div class="flex-child p-2">
          <form action="{{route('admin.course.delete',['id'=>$course->id])}}" method="POST">
            <p><img width="300" src="{{URL::asset($course->photo)}}" alt=""></p>
            <h1 class="text-bold box-title">{{$course->title}}</h1>
            <h5 class="definition">{!!$course->definition!!}</h5>
            <h4 class="text-danger text-bold price">{{$course->price}} SUM</h4>
            <h5 class="definition">Visibility: {{$course->visibility?"ON":"OFF"}}</h5>
            @csrf
            @method('delete')
            <a class="btn btn-secondary" href="{{route('admin.course.edit',['id'=>$course->id])}}">Edit</a>
            <input class="btn btn-danger" type="submit" value="Delete">
          </form>
        </div>
      @endforeach
    </div>
</div> 


@endsection


