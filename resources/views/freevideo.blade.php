<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekin video</title>
    <link rel = "icon" href = "{{ URL::asset('image/icon.png') }}" type = "image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video-js.css">
    <script src="https://cdn.jsdelivr.net/npm/video.js@6.6.3/dist/video.min.js"></script>
    <link href="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.css" rel="stylesheet">
    <script src="//players.brightcove.net/videojs-live-dvrux/1/videojs-live-dvrux.min.js"></script>
    <link href="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.css" rel="stylesheet">
    <script src="//players.brightcove.net/videojs-quality-menu/1/videojs-quality-menu.min.js"></script>
    <script src="https://cdn.streamroot.io/videojs-hlsjs-plugin/1/stable/videojs-hlsjs-plugin.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/video.css') }}">
    <style>
        .video-js .vjs-tech {
            position: inherit !important;
        }
    </style>
</head>

                
<body> 
    <section class="main">  
        <p class="title">⚠️ DIQQAT: TEKIN DARS!</p>
        <div class="flex-container">
            <div class="flex-child">
                <video id="video0" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" poster="https://vz-e119da89-d8b.b-cdn.net/642d13fe-1a30-4d24-9085-b0e8f0113d0e/thumbnail.jpg">
                    <source src="https://vz-e119da89-d8b.b-cdn.net/642d13fe-1a30-4d24-9085-b0e8f0113d0e/playlist.m3u8" type="application/x-mpegURL">
                </video>
            </div>  
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
                player.src({ src: 'https://vz-e119da89-d8b.b-cdn.net/642d13fe-1a30-4d24-9085-b0e8f0113d0e/playlist.m3u8' });
                var interval = setInterval(() => {
                    if(player.currentTime()>360){
                        document.getElementsByClassName('wrapper')[0].style.display='block';
                        clearInterval(interval);
                    }
                    console.log('true');
                }, 1000);
        </script>

        <div class="wrapper" style="display: none">
            <p>
                <a href="{{route('index')}}" role="button">SUPERMIYA KURSIGA O`TISH</a>
            </p>
        </div>

        <br>
        <br>

    {{-- @include('partials.footer') --}}
</body>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
{{-- <script src="{{ URL::asset('js/app.js') }}"></script> --}}
</html>