@extends('layouts.master')

@section('title', 'Barcha kurslar')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
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
    /* height: 100%; */
}
img{
    border-radius: 50px;
    width: 100%;
    height: 100%;
    padding: 5px;
}
</style>
<div class="container">
    <h1 class="text-center">Xush kelibsiz!</h1>
    <h2 class="text-center">Barcha kurslar</h2>
    <div class="flex-container">
        @foreach ($courses as $course)
            @if($course->visibility)
            <div class="flex-child p-2">
                <p><img width="300" height="300" src="{{URL::asset($course->photo)}}" alt="{{$course->title}}"></p>
                <h1 class="text-bold box-title">{{$course->title}}</h1>
                <h5 class="definition">{!!$course->definition!!}</h5>
                
                <?php $permission = clone $permissions ?>
                @if($permission = $permission->where('course_id',$course->id)->first())
                    <h4 class="text-bold btn btn-success"><a style="color: white" href="{{route('user.course.show',['id'=>$permission->course->id])}}">Kursga o'tish</a></h4>
                @else
                    <h4 class="text-danger text-bold price">{{$course->price}} SUM</h4>
                    <h4 class="text-bold btn btn-danger"><a style="color: white" href="{{route('user.course.pay',['id'=>$course->id])}}">Sotib olish</a></h4>
                @endif
            </div>
            @endif
        @endforeach
      </div>
</div>

@endsection