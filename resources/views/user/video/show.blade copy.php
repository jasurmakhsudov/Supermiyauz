@extends('layouts.master')

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

/* video{
    max-width: 400px;
    width: 100%;
} */

#video{
        margin-top: 10px;
        width: 100%;
        height: 50vw;
        max-height: 634px;
}
</style>
        


<div class="containers">
    
    <div class="row align-items-center">
        <div class="col-sm">
          <a class="btn btn-success align-middle w-100 {{$prev?"":"disabled"}}" href="{{route('user.video.show',['id'=>$prev?$prev:" "])}}" >{{$prev?"Previous":"Start"}}</a>
        </div>
        <div class="col-6">
            <h1 class="text-center"> {{$video->title}}</h1>
        </div>
        <div class="col-sm">
            <a class="btn btn-success float-right w-100 {{$next?"":"disabled"}}" href="{{route('user.video.show',['id'=>$next?$next:" "])}}" >{{$next?"Next":"End"}}</a>
        </div>
      </div>

      
        {{-- <script src="https://vjs.zencdn.net/7.14.3/video.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/3.6.0/videojs-contrib-hls.js"></script> --}}
        {{-- <script src="{{URL::asset('js/videojs-contrib-hls.js')}}"></script> --}}
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/5.15.0/videojs-contrib-hls.js"></script> --}}
        {{-- <script src="https://rawgit.com/kmoskwiak/videojs-resolution-switcher/dev/lib/videojs-resolution-switcher.js"></script> --}}
        <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
        
        <video id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" 
        data-setup='{}'>
            <source src="{{URL::asset("video/course/hls/".$video->url."_0_400.m3u8")}}" type="application/x-mpegURL" label="240P">
            <source src="{{URL::asset("video/course/hls/".$video->url."_1_800.m3u8")}}" type="application/x-mpegURL" label="360P">
            <source src="{{URL::asset("video/course/hls/".$video->url."_2_1200.m3u8")}}" type="application/x-mpegURL" label="480P" selected="true">
            <source src="{{URL::asset("video/course/hls/".$video->url."_3_2500.m3u8")}}" type="application/x-mpegURL" label="720P">
            <source src="{{URL::asset("video/course/hls/".$video->url."_4_5000.m3u8")}}" type="application/x-mpegURL" label="1080P">
        </video>
        
        <script src="https://unpkg.com/video.js/dist/video.js"></script>
        <link href="https://unpkg.com/@silvermine/videojs-quality-selector/dist/css/quality-selector.css" rel="stylesheet">
        {{-- <script src="./path/to/video.min.js"></script> --}}
        {{-- <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script> --}}

        <script src="https://unpkg.com/@silvermine/videojs-quality-selector/dist/js/silvermine-videojs-quality-selector.min.js"></script>

        {{-- <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script> --}}
        <script>
            var player = videojs('video',{
            // controlBar: {
            //     children: [
            //         'playToggle',
            //         'progressControl',
            //         'volumePanel',
            //         'qualitySelector',
            //         'fullscreenToggle',
            //     ],
            // },
            });
            player.controlBar.addChild('QualitySelector');

            // player.hlsQualitySelector();
            // player.play();
        </script>   
        {{-- <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" /> --}}
        {{-- <style>
      .vjs-menu-button-popup .vjs-menu {
        left: -3em;
      }
      .vjs-menu-button{
        padding: 10px !important;
      }

      .c_video-dimensions{
        width: 100%;
        height: 50vw;
        max-height: 634px;
      }
        </style> --}}
    
        {{-- <div id="player">
            <video id="c_video" controls class="video-js vjs-big-play-centered">
                <source src="{{URL::asset($video->url)}}" type="application/x-mpegURL">
            </video>   
        </div> --}}


        <div class="card-body">
            <h1>Comments</h1>
            
            <hr />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            
            
            
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
                    <input type="submit" class="btn btn-lg btn-success py-0" value="Add Comment" />
                </div>
            </form>
        </div>

           


</div> 

        <script>
            // var options = {
            //     // width: 720,
            //     // height: 360,
            //     // controlBar: {
            //     //     children: [
            //     //         'playToggle',
            //     //         'progressControl',
            //     //         'volumePanel',
            //     //         'qualitySelector',
            //     //         'fullscreenToggle',
            //     //     ],
            //     // },
            //     plugins: {
            //       videoJsResolutionSwitcher: {
            //         default: '1080',
            //         dynamicLabel: true
            //       }
            //     }
            //   }

            //     var player = videojs('c_video',options);
              </script>








@endsection


