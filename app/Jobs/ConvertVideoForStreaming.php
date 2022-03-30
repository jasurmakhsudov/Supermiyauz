<?php

namespace App\Jobs;

use App\Models\Videos;
use Carbon\Carbon;
use FFMpeg;
use FFMpeg\Format\Video\X264;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use FFMpeg\Filters\Video\VideoFilters;
use FFMpeg\Coordinate\Dimension;
use App\Models\Courses;

class ConvertVideoForStreaming implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $video;
    public $filename;
    public $timeout = 0;

    public function __construct(Videos $video,$filename)
    {
        $this->video = $video;
        $this->filename = $filename."_".$this->video->id;
    }

    public function handle()
    {
        // create some video formats...
        $_240p  = (new X264)->setKiloBitrate(400);
        $_360p  = (new X264)->setKiloBitrate(800);
        $_480p  = (new X264)->setKiloBitrate(1200);
        $_720p = (new X264)->setKiloBitrate(2500);
        $_1080p = (new X264)->setKiloBitrate(5000);
        
        // dd(public_path());
        // $filename = Courses::find($this->video->course_id)->title."_".$this->video->title."_".$this->video->id;
        
                    // $ld = $this->filename."_360_.m3u8";
                    // shell_exec("ffmpeg -i ".public_path()."/".$this->video->url." -profile:v baseline -level 3.0 -s 640x360 -start_number 0 -hls_time 10 -hls_list_size 0 -f hls ".public_path()."/video/course/hls/".$ld);
                    // $sd = $this->filename."_480_.m3u8";
                    // shell_exec("ffmpeg -i ".public_path()."/".$this->video->url." -profile:v baseline -level 3.0 -s 800x480 -start_number 0 -hls_time 10 -hls_list_size 0 -f hls ".public_path()."/video/course/hls/".$sd);
                    // $hd = $this->filename."_720_.m3u8";
                    // shell_exec("ffmpeg -i ".public_path()."/".$this->video->url." -profile:v baseline -level 3.0 -s 1280x720 -start_number 0 -hls_time 10 -hls_list_size 0 -f hls ".public_path()."/video/course/hls/".$hd);
                    // $fhd = $this->filename."_1080_.m3u8";
                    // shell_exec("ffmpeg -i ".public_path()."/".$this->video->url." -profile:v baseline -level 3.0 -s 1920x1080 -start_number 0 -hls_time 10 -hls_list_size 0 -f hls ".public_path()."/video/course/hls/".$fhd);
        // shell_exec("/usr/local/bin/ffmpeg -i ".public_path()."/video/course/Blackcube_Dangasalik.mp4 -profile:v baseline -level 3.0 -s 640x360 -start_number 0 -hls_time 10 -hls_list_size 0 -f hls ".public_path()."/video/course/hls/360_out.m3u8");
        // "ffmpeg -i ./public/video/course/Blackcube_Dangasalik.mp4 -profile:v baseline -level 3.0 -s 640x360 -start_number 0 -hls_time 10 -hls_list_size 0 -f hls ./public/video/course/hls/360_out.m3u8"
        
                    // $url = "video/course/hls/".$this->filename;
        // file_put_contents(public_path()."/".$url, "#EXTM3U\n#EXT-X-STREAM-INF:BANDWIDTH=375000,RESOLUTION=640x360\n".$this->filename."_360_.m3u8\n#EXT-X-STREAM-INF:BANDWIDTH=750000,RESOLUTION=800x480\n".$this->filename."_480_.m3u8\n#EXT-X-STREAM-INF:BANDWIDTH=2000000,RESOLUTION=1280x720\n".$this->filename."_720_.m3u8\n#EXT-X-STREAM-INF:BANDWIDTH=3500000,RESOLUTION=1920x1080\n".$this->filename."_1080_.m3u8");
        // $this->video->url = $url;
        // dd($this->video->url);
        FFMpeg::fromDisk('public')
            ->open($this->video->url)
            ->exportForHLS()
            ->toDisk('public')
            ->addFormat($_240p)
            ->addFormat($_360p)
            ->addFormat($_480p)
            ->addFormat($_720p)
            ->addFormat($_1080p)
            ->save($this->filename.'.m3u8');
        
            if(file_exists(public_path()."/video/course/hls/".$this->video->url)){
                unlink(public_path()."/video/course/hls/".$this->video->url);
            }
            
            $this->video->update([
                'url'=>$this->filename,
                'updated_at' => Carbon::now(),
            ]); 
        // open the uploaded video from the right disk...
        // dd(public_path().'/video/course/');    
        // $ffmpeg = \FFMpeg\FFMpeg::create([
        //     'ffmpeg.binaries' => exec('which ffmpeg'),
        //     'ffprobe.binaries' => exec('which ffprobe')
        // ]);
        
        // $ffprobe = FFMpeg\FFProbe::create();
        // $video = $ffprobe->streams(public_path().'/video/course/Blackcube_Dangasalik.mp4')->videos()->first();
        // $width = $video->get('width');
        // $height = $video->get('height');
        // $bitrate = $video->get('bit_rate');
        // dd($bitrate);

        // $video=FFMpeg::fromDisk('video')
        //     ->open('Blackcube_Dangasalik.mp4');

        // $resolutions = [];

        // //check if we can make 4k version
        // // if ( ( $bitrate >= 14000 )  ||  ( $width >= 3840 && $height >= 2160 ) ) 
        // {
        //     // Then it's a 4k video
        //     // We make a 4k version of HLS

        //     $resolutions[] = ['q' => 14000, 'size' => [ 'w' => 3840, 'h' => 2160]];

        // }


        // //check if we can make HD version
        // // if(  ( $bitrate >= 5800 )  ||  ( $width >= 1920 && $height >= 1080 )  )

        // {
        //     // Then it's a HD video
        //     // We make a HD version of HLS
        //     $resolutions[] = ['q' => 5800, 'size' => [ 'w' => 1920, 'h' => 1080]];

        // }

        // FFMpeg::fromDisk('video')
        //     ->open('Blackcube_Dangasalik.mp4')

        // // add the 'resize' filter...
        //     ->addFilter(function ($filters) {
        //         $filters->resize(new Dimension(960, 540));
        //     })

        // // call the 'export' method...
        //     ->exportForHLS()

        // // tell the MediaExporter to which disk and in which format we want to export...
        //     ->toDisk('video')
        //     ->inFormat($ldBitrateFormat)

        // // call the 'save' method with a filename...
        //     ->save('sad.m3u8');


        // //Lastly we loop through and add formarts

        // $video->addFilter(function ($filters) {
        //     $filters->resize(new Dimension(960, 540));
        // });
        // $video->addFormat($ldBitrateFormat);
        // $video->exportForHLS()->toDisk('video');
        // // $video->addFormat('1300', function($media) {
        // //     // $media->addFilter('scale='. $resolution['size']['w'].':'. $resolution['size']['h']);
        // //     $media->addFilter('scale=320:480');
        // // });
        
        // $video->save('video_name.m3u8');
        // // call the 'exportForHLS' method and specify the disk to which we want to export...
        // //     ->exportForHLS()
        // //     ->toDisk('video')
        // //     ->setSegmentLength(10) 
        // //     ->setKeyFrameInterval(48)
        // // // we'll add different formats so the stream will play smoothly
        // // // with all kinds of internet connections...
        // //     // ->addFormat($ldBitrateFormat, function($media) {
        // //     //     $media->addFilter('scale=640:480');
        // //     // })
        // //     // ->addFormat($ldBitrateFormat2, function($media) {
        // //     //     $media->scale(960, 720);
        // //     // })
        // //     ->addFormat($ldBitrateFormat)
        // //     ->addFormat($ldBitrateFormat2)
        // //     // ->addFormat($sdBitrateFormat)
        // //     // ->addFormat($hdBitrateFormat)
        // //     // ->addFormat($fullHdBitrateFormat)
        // // // call the 'save' method with a filename...
        // //     ->save($this->video->id . '.m3u8');

        // // update the database so we know the convertion is done!
        // $this->video->update([
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}