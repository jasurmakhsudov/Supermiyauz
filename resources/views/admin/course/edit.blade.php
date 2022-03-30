
@extends('layouts.master')

@section('title', 'Edit Course Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1>Edit Course</h1>
    <form action="{{route('admin.course.update')}}" enctype="multipart/form-data" class="form-group" method="POST">
        <div class="form-group">
            <div class="text-center">
                <p><img style="border-radius: 50px" class="border border-secondary" width="300" src="{{URL::asset($course->photo)}}" id="output"/></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="id" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" name="id" id="id" value="{{$course->id}}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="title" id="title" value="{{$course->title}}">
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="definition" class="col-sm-2 col-form-label">Definition</label>
            <div class="col-sm-10">
              <textarea type="text" rows=4 class="form-control" name="definition" id="definition" value="{{$course->definition}}">{{$course->definition}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="price" id="price" value="{{$course->price}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
              <input type="file" accept="image/*" class="form-control-file" onchange="loadFile(event)" name="photo" id="photo">
            </div>
        </div>
        <div class="form-group row">
          <label for="visibility" class="col-sm-2 col-form-label">Visibility</label>
          <div class="col-sm-10">
            <input type="checkbox" class="form-control" style="width: 4%" name="visibility" id="visibility" value=""{{$course->visibility?"checked":""}}>
          </div>
        </div>

        <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
        </script>
       
        <input class="btn btn-primary" type="submit" value="Update">
        <a class="btn btn-danger" href="{{route('admin.course.index')}}">Cancel</a>
    </form>
</div> 


@endsection


