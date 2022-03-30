@extends('layouts.master')

@section('title', 'Create Course Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1>Create Course</h1>
    <form action="{{route('admin.course.store')}}" enctype="multipart/form-data" class="form-group" method="POST">
        <div class="form-group row">
            <div class="col-sm text-center">
                <p><img class="border border-secondary d-none" width="200px" id="output"/></p>
            </div>
        </div>
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="title" id="title">
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="definition" class="col-sm-2 col-form-label">Definition</label>
            <div class="col-sm-10">
                <textarea type="text" rows=4 class="form-control" name="definition" id="definition"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="price" id="price">
            </div>
        </div>
        <div class="form-group row">
            <label for="photo" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
              <input type="file" accept="image/*" class="form-control-file" onchange="loadFile(event)" name="photo" id="photo">
            </div>
        </div>

        <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            document.getElementById('output').classList.remove('d-none');   
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        </script>
       
        <input class="btn btn-success" type="submit" value="Create">
        <a class="btn btn-danger" href="{{route('admin.course.index')}}">Cancel</a>
    </form>
</div> 


@endsection


