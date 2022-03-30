@extends('layouts.master')

@section('title', 'All Comments Page')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .table-wrap{
        width:100%;
    }
</style>
        
<div class="table-wrap">
    @include('partials.alerts')
    <h1>Comments</h1>
    @foreach ($videos as $video)
    <div class="card-body" style="border:2px solid #3ca9e5">
        <p class="h3 m-0 text-center"><small class="text-muted">{{$video->course->title}}:</small> {{$video->title}}</p>
        
        <?php $i=0;?>
        @include('partials.replies', ['comments' => $video->comments, 'video_id' => $video->id])

        <hr />

        <h5>Leave a comment</h5>
        <form method="post" action="{{ route('comment.store') }}">
            @csrf
            <div class="form-group">
                <textarea type="text" name="comment" rows="4" class="form-control"></textarea>
                <input type="hidden" name="video_id" value="{{ $video->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-lg btn-success py-2" value="Add Comment" />
            </div>
        </form>
    </div>
    @endforeach
</div> 

@endsection


