@extends('layouts.master')

@section('title', 'Create Video Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<style>
    .progress { position:relative; width:100%; height: 40px; border: 3px solid grey; margin: 10px 0px;border-radius: 30px}
    .bar { background-color: #64c97b; width:0%; height:40px; }
    .percent { position:absolute; display:inline-block; left:50%; color: #040608; font-size: 20px;}
</style>
<div class="container">
    <div class="alert alert-success" id="success-alert">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> Video successfully uploaded.
    </div>
    <script>$("#success-alert").hide();</script>
    <h1>Create Video</h1>
    
    <form action="{{route('admin.video.store')}}" enctype="multipart/form-data" class="form-group" method="POST">
        <div class="form-group row">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="title" id="title">
            </div>
        </div>
        @csrf
        <div class="form-group row">
            <label for="course_id" class="col-sm-2 col-form-label">Course</label>
            <div class="col-sm-10">
                <select id="course_id" name="course_id" class="form-control">
                  <option disabled selected value>-</option>
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>  
        <div class="form-group row">
            <label for="order" class="col-sm-2 col-form-label">Order</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="order" id="order">
            </div>
        </div>
        <div class="form-group row">
            <label for="video" class="col-sm-2 col-form-label">Video</label>
            <div class="col-sm-10">
              <input type="file" accept="video/*" class="form-control-file" name="video" id="video">
            </div>
        </div>
        <div class="progress">
            <div class="bar"></div >
            <div class="percent">0%</div >
        </div>
        <input class="btn btn-success" type="submit" value="Create">
        <a class="btn btn-danger" href="{{route('admin.video.index')}}">Cancel</a>
    </form>
</div> 

<script type="text/javascript">
    $(function() {
        $(document).ready(function()
        {
            var bar = $('.bar');
            var percent = $('.percent');
            $('form').ajaxForm({
                beforeSend: function() {
                    var percentVal = '0%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal)
                    percent.html(percentVal);
                },
                complete: function(xhr) {
                    $('form')[0].reset();
                    bar.width("0%")
                    percent.html("0%");
                    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                        $("#success-alert").slideUp(500);
                    });   
                }
            });
        }); 
    });
</script>

@endsection


