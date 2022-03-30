
@extends('layouts.master')

@section('title', 'Edit Course Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<style>
    .flex-container{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    width: 100%;
    /* margin:0px 10px; */
    /* border: 1px solid blue; */
}

.flex-child{
    width: 400px;
    border: 1px solid red;
    text-align: center;
    height: 100%;
}
img{
    /* border:1px solid green; */
}

video{
    max-width: 400px;
    width: 100%;
}
</style>
<div class="container">
    <h1 class="text-center"><img style="border-radius: 50px" class="border border-secondary" width="100" src="{{URL::asset($course->photo)}}" id="output"/></h1>
    <h1 class="text-center">{{$course->title}}</h1>
    <p class="text-center">{{$course->definition}}>    

    <div class="flex-container">
        @foreach($course->videos as $video)
            <div class="flex-child">
                <h4 class="text-bold box-title">{{$video->title}}</h4>
                <p>
                    <video width="" controls nodownload>
                        <source src="{{URL::asset($video->url)}}" type="video/mp4">    
                    </video>
                </p>
            </div>
        @endforeach
    </div>
</div> 


@endsection


