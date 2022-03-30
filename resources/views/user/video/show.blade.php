@extends('layouts.master')

@section('title', $course.' kursi')

@section('content')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video-js.css">
<script src="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video.min.js"></script>
<link href="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.css" rel="stylesheet">
<script src="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.js"></script>
<link href="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.css" rel="stylesheet">
<script src="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.min.js"></script>
<script src="https://cdn.streamroot.io/videojs-hlsjs-plugin/1/stable/videojs-hlsjs-plugin.js"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/video.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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

#video{
        margin-top: 10px;
        width: 100%;
        height: 50vw;
        max-height: 634px;
}
.video0-dimensions.vjs-fluid {
    padding-top: 0px;
}
</style>
        
<style>
.tab {
  /* float: left; */
  border-right: 1px solid #ccc;
  /* border-top: 1px solid #ccc; */
  /* background-color: #f1f1f1; */
  max-width: 400px;
  width: 40%;
  /* height: 100%; */
  /* border: 1px solid red; */
}

/* Style the buttons that are used to open the tab content */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 10px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  /* border-bottom: 1px solid #ccc; */
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  /* float: left; */
  padding: 0px 1px;
  /* border: 1px solid red; */
  width: 100%;
  border-left: none;
  height: 100%;
}
.tabpanel{
    display: flex;
    /* border: 1px solid green; */
}
.card-body{
    display: none;
}
.on{
    display: block;
}

.video-js .vjs-tech {
    position: inherit !important;
}

.display-comment{
    max-height: 380px;
    overflow-y: scroll;
}
</style>

<div class="container">
    <div class="header" style="border-bottom: 1px solid #ccc;">
        <button type="button" id="videotoggle" class="btn btn-secondary" onclick="togglevideolist()">☰</button>
        <div class="col">
            <h2 class="text-center"> {{$course}}</h2>
        </div>
    </div>
    
    <div class="tabpanel">
        <div id="tab" class="tab">
            @foreach ($videos as $video)        
                <button class="tablinks <?php if($video->id==$id) echo "active" ?>" onclick="selectVideo(event,'{{$video->url}}')">{{$video->title}}</button>
            @endforeach
        </div>
        <div class="tabcontent">
            <h2 class="text-center" id="video-title"> {{$videos->where('id',$id)->first()->title}}</h2>
            <video id="video0" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" poster="https://vz-e119da89-d8b.b-cdn.net/{{$videos->where('id',$id)->first()->url}}/thumbnail.jpg">
                <source src="https://vz-e119da89-d8b.b-cdn.net/{{$videos->where('id',$id)->first()->url}}/playlist.m3u8" type="application/x-mpegURL">
            </video>
        </div>
    </div>

    @foreach ($videos as $video)
    <div class="card-body <?php if($video->id==$id) echo "on" ?>" id="{{$video->url}}">
        <h1>Comments</h1>
        <hr />
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         --}}
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

<script>
    var options = {
        plugins: {
            // JSON config added by Brightcove player generator
            streamrootHls: {
                hlsjsConfig: {
                    // Your Hls.js config
                },
            },
            qualityMenu: {
                useResolutionLabels: true
            }
        }
    };
    var player = videojs('video0',options);
    player.qualityMenu();
    player.dvrux();
    player.src({ src: 'https://vz-e119da89-d8b.b-cdn.net/{{$videos->where('id',$id)->first()->url}}/playlist.m3u8' });

    function togglevideolist() {
        var x = document.getElementById('tab');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function selectVideo(evt, id) {
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    document.getElementById('video-title').innerHTML = evt.currentTarget.innerHTML;
    player.src({ src: 'https://vz-e119da89-d8b.b-cdn.net/'+id+'/playlist.m3u8' });
    player.poster('https://vz-e119da89-d8b.b-cdn.net/'+id+'/thumbnail.jpg');
    // tabcontent = document.getElementsByClassName("tabcontent");
    // for (i = 0; i < tabcontent.length; i++) {
    //     tabcontent[i].style.display = "none";
    // }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    cardbody = document.getElementsByClassName("card-body");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        cardbody[i].className = cardbody[i].className.replace(" on", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    // document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    document.getElementById(id).className+=" on";
    }
</script>


            





@endsection


