@extends('layouts.master')

@section('title', 'All Videos Page')

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
    /* border: 1px solid red; */
    text-align: center;
    height: 100%;
}

 input#search-bar {
	 margin: 0 auto;
	 width: 100%;
	 height: 45px;
	 padding: 0 20px;
	 font-size: 1rem;
	 border: 1px solid #d0cfce;
	 outline: none;
}
 input#search-bar:focus {
	 border: 1px solid #008abf;
	 transition: 0.35s ease;
	 color: #008abf;
}
 input#search-bar:focus::-webkit-input-placeholder {
	 transition: opacity 0.45s ease;
	 opacity: 0;
}
 input#search-bar:focus::-moz-placeholder {
	 transition: opacity 0.45s ease;
	 opacity: 0;
}
 input#search-bar:focus:-ms-placeholder {
	 transition: opacity 0.45s ease;
	 opacity: 0;
}
 .search-icon {
	 position: relative;
	 float: right;
	 width: 75px;
	 height: 75px;
	 top: -60px;
	 right: -10px;
}

.video-js{
    width: 100% !important;
    height: 20vw !important;
}

@media screen and (max-width: 768px){
    #video{
        width: 100%;
        /* height: 50vw; */
    }
    .flex-child{
        margin: 20px 0px;
    }
    .video-js{
        width: 100% !important;
        height: 50vw !important;
    }

}
 
</style>

<div class="container">
    @include('partials.alerts')
    <h1>Videos <span style="float: right"><a class="btn btn-success" href="{{route('admin.video.create')}}">Create Video</a></span></h1>    
    <p>
        <input type="text" id="search-bar" onkeyup="search()" placeholder="What can I help you with today?">
        <img class="search-icon" src="{{URL::asset('image/search-icon.png')}}">
    </p>     

    <div class="flex-container">
        <?php $i=0;?>
        @foreach($videos as $video)
        <div class="flex-child">
          <form action="{{route('admin.video.delete',['id'=>$video->id])}}" method="POST">
            <h4 class="text-bold box-title">{{$video->title}}</h4>
            
            <video id="video{{$i++  }}" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" poster="https://vz-e119da89-d8b.b-cdn.net/{{$video->url}}/thumbnail.jpg">
                <source src="https://vz-e119da89-d8b.b-cdn.net/{{$video->url}}/playlist.m3u8" type="application/x-mpegURL">
            </video>
            @csrf
            @method('delete')
            <p><strong> Course: </strong><span>{{$video->course->title??""}}</span></p>
            <p><strong> Order: </strong><span>{{$video->order??""}}</span></p>
            <p><strong> Visibility: </strong><span>{{$video->visibility?"ON":"OFF"}}</span></p>
            <a class="btn btn-secondary" href="{{route('admin.video.edit',['id'=>$video->id])}}">Edit</a>
            <input class="btn btn-danger" type="submit" value="Delete">
          </form>
        </div>
        @endforeach
        <script>
          for (i = 0; i < {{$i}}; ++i) {
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
                var player = videojs('video'+i,options);
                player.qualityMenu();
                player.dvrux();
                var src = player.currentSrc();
                player.src({ src: src });
            }
        </script>   

    </div>
</div> 
<script>
    function search() {
        var input, filter, flex_container, flex_child, a, i, title, course;
        input = document.getElementById("search-bar");
        filter = input.value.toUpperCase();
        flex_container = document.getElementsByClassName("flex-container");
        flex_child = document.getElementsByClassName("flex-child");
        for (i = 0; i < flex_child.length; i++) {
            h4 = flex_child[i].getElementsByTagName("h4")[0];
            span = flex_child[i].getElementsByTagName("span")[0];
            title = h4.textContent || h4.innerText;
            course = span.textContent || span.innerText;
            if (title.toUpperCase().indexOf(filter) > -1 || course.toUpperCase().indexOf(filter) > -1 ) {
                flex_child[i].style.display = "";
            } else {
                flex_child[i].style.display = "none";
            }
        }
    }
</script>

@endsection


