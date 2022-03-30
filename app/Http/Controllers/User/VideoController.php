<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Videos;

class VideoController extends Controller
{
    public function show(Request $request){
        
        //logic check
        $video = Videos::findorfail($request->id);
        if(!$video->visibility || !$video->course->visibility)
            return abort(404);
        // $prev = Videos::where('course_id','=',$video->course_id)->where('visibility', '=', '1')->where('id', '<', $video->id)->max('id');

    // get next user id
        // $next = Videos::where('course_id','=',$video->course_id)->where('visibility', '=', '1')->where('id', '>', $video->id)->min('id');

        return view('user.video.show',['videos'=>$video->course->videos->where('visibility','1')->sortBy('order'),'id'=>$request->id,'course'=>$video->course->title]);
    }
}
