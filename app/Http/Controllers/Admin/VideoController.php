<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Courses;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StoreVideoRequest;
use App\Jobs\ConvertVideoForStreaming;
use Illuminate\Support\Facades\Http;

use FFMpeg;
use FFMpeg\Format\Video\X264;

use ToshY\BunnyNet\VideoStreamRequest;

class VideoController extends Controller
{
    
    public function index()
    {
        return view('admin.video.index',['videos'=>Videos::all()]);
    }

    public function create()
    {
        return view('admin.video.create',['courses'=>Courses::all()]);
    }
    public function store(StoreVideoRequest $request)
    {
        // $filename = str_replace(" ", "_", Courses::find($request->course_id)->title."_".$request->title.".".$request->video->getClientOriginalExtension());
        
        // require_once('vendor/autoload.php');
        // dd($request->video->getPathName());
        // dd($request);
        // dd($request->video);
        $bunnyStream = new VideoStreamRequest(
            '2420d9bc-242a-498d-829c6149e573-860d-41d0',
        );
        // dd($bunnyStream->getCollectionList(20258, [
        //     'page' => 1,
        //     'itemsPerPage' => 100,
        //     // 'search' => 'Bunny Collection',
        //     // 'orderBy' => 'date',
        // ]));
        // dd($bunnyStream->listVideos(20258, [
        //     'page' => 1,
        //     'itemsPerPage' => 100,
        //     // 'search' => 'bunny-hop.mp4',
        //     // 'collection' => 'custom-collection',
        //     // 'orderBy' => 'date',
        // ]));

        // dd($dat);
        // dd($bunnyStream->createVideo(20258, [
        //     'title' => $request->title,
        //     'collectionId' => 'a75fb6c8-043c-40f0-9d34-f07596491862'
        // ]));

    //    dd($bunnyStream);

        // $bunnyStream->uploadVideo(1234, 'e7e9b99a-ea2a-434a-b200-f6615e7b6abd', '/var/www/html/bunny-hop.mp4');

        

        $url = "http://video.bunnycdn.com/library/20258/videos";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Accept: application/json",
            "AccessKey: 2420d9bc-242a-498d-829c6149e573-860d-41d0",
            "Content-Type: application/*+json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = '{"title": "'.$request->title.'"}';
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $result = curl_exec($curl);
        $guid = json_decode($result)->guid;
        // dd(json_decode($result)->guid);
        // dd($request->video);
        $bunnyStream->uploadVideo(20258, $guid, $request->video->getPathName());
        
        // $url = "http://video.bunnycdn.com/library/20258/videos/".$guid;

        // // $curl = curl_init($url);
        //     curl_setopt($curl, CURLOPT_URL, $url);
        //     curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        //     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //     $headers = array(
        //         "Accept: application/json",
        //         "AccessKey: 2420d9bc-242a-498d-829c6149e573-860d-41d0",
        //         "Content-Length: 0",
        //     );
        //     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);



        // $data = [
        //     "id" => $id,
        //     "method"=> "cards.create",
        //     "params"=> [
        //         "card"=> [ "number"=> "$request->number", "expire"=> "$request->expire"],
        //         "save"=> true
        //     ]
        // ];
        // $data = '{"file": "'.$request->video->getPathName().'"}';
        // $response = Http::withHeaders([
        //         "Accept: application/json",
        //         "AccessKey: 2420d9bc-242a-498d-829c6149e573-860d-41d0",
        //         "Content-Length: 0",
        //     ])->put($url, $data);
        // $response = json_decode($response->body());

        // $data = '{"file": "'.$request->video->getPathName().'"}';
            // $data = ["file"=> $request->file('video')];
            // // dd($request);
            // curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));

            // $resp = curl_exec($curl);
            // dd($resp);
            // curl_close($curl);
            // var_dump($result);

        $video = Videos::create([
            'title' => $request->title,
            'url'=> $guid,
            'course_id'=> $request->course_id,
            'order' => $request->order
        ]);
        return redirect()->route('admin.video.index')->with(['success'=>"Successfully created"]);
        
        // $video_path=$request->video->storeAs('video', $filename ,'public');
        // $request->video->move(public_path('video/course/'), $filename);
        // $video_path = "video/course/".$filename;
        // $video_path = $filename;
    
        // $video = Videos::create([
        //     'title' => $request->title,
        //     'url'=> $video_path,
        //     'course_id'=> $request->course_id
        // ]);
        // $filename = str_replace(".".$request->video->getClientOriginalExtension(), "", $filename);
        // $this->dispatch(new ConvertVideoForStreaming($video,$filename));
        // return redirect()->route('admin.video.index')->with(['success'=>"Successfully created"]);
    }

    public function delete(Request $request){
        // $bunnyStream = new VideoStreamRequest(
        //     '2420d9bc-242a-498d-829c6149e573-860d-41d0',
        // );

        // $bunnyStream->deleteVideo(20258, '9b61cf4f-aae9-4017-b4c4-0e48040c3249');


        $video=Videos::find($request->id);
        // dd($video->url);
        // $client = new \GuzzleHttp\Client();

        // $response = $client->request('DELETE', 'http://video.bunnycdn.com/library/20258/videos/9b61cf4f-aae9-4017-b4c4-0e48040c3249', [
        // 'headers' => [
        //     'Accept' => 'application/json',
        // ]
        // ]);

        // echo $response->getBody();
        // $bunnyStream->deleteVideo(20258, $video->url);
        // if(file_exists($video->url)){
        //     unlink($video->url);
        // }
        return $video->delete()?redirect()->route('admin.video.index')->with(['success'=>"Successfully deleted"]):route('admin.course.index',['errors'=>"Failed to delete"]);
    } 

    public function edit(Request $request){
        return view('admin.video.edit',['video'=>Videos::find($request->id),'courses'=>Courses::all()]);
    }
    public function update(Request $request){

        // $bunnyStream = new VideoStreamRequest(
        //     '2420d9bc-242a-498d-829c6149e573-860d-41d0',
        // );

        // $bunnyStream->uploadVideo(20258, $request->guid, $request->video->getPathName());
        // // $bunnyStream->updateVideo(20258, 'e7e9b99a-ea2a-434a-b200-f6615e7b6abd', [
        // //     'title' => 'Bunny Hop v2',
        // //     'collectionId' => '12996949-d816-4126-8a4a-73cef3fb8c47',
        // // ]);

        $video = Videos::find($request->id);        
        $video->update([
            'title'=> $request->title,
            'course_id' => $request->course_id,
            'order' => $request->order,
            'visibility' => $request->has('visibility'),
        ]); 
        // if($request->video)
        // {   
        //     $filename = str_replace(" ", "_", Courses::find($request->course_id)->title."_".$request->title.".".$request->video->getClientOriginalExtension());
        //     $video_path=$request->video->storeAs('video', $filename ,'public');
        //     $filename = str_replace(".".$request->video->getClientOriginalExtension(), "", $filename);
        //     $video->update([
        //         'url'=> $video_path,
        //     ]); 
        //     $this->dispatch(new ConvertVideoForStreaming($video,$filename));
        // }
        return redirect()->route('admin.video.index')->with(['success'=>"Successfully edited"]);
    }

    public function list()
    {
        return view('admin.video.list',['videos'=>Videos::all()]);
    }
}
