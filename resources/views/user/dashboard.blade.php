@extends('layouts.master')

@section('title', 'Bosh sahifa')

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
    height: 100%;
}
img{
    border-radius: 50px;
    width: 100%;
    padding: 5px;
}
</style>
<div class="container">
    <h1 class="text-center">Xush kelibsiz!</h1>
    <h2 class="text-center">Siz xarid qilgan kurslar</h2>
    <div class="flex-container">
        @forelse($permissions as $permission)
        <div class="flex-child p-2">
            <p><img width="300" src="{{URL::asset($permission->course->photo)}}" alt="{{$permission->title}}"></p>
            <h1 class="text-bold box-title">{{$permission->course->title}}</h1>
            <h5 class="definition">{!!$permission->course->definition!!}</h5>
            <h4 class="text-bold btn btn-success"><a style="color: white" href="{{route('user.course.show',['id'=>$permission    ->course->id])}}">Kursga o'tish</a></h4>
        </div>
        @empty
            <h3><a href="{{route('user.course.index')}}"> Kurslar xarid qilish </a></h3>
        @endforelse
    </div>
</div>

@endsection