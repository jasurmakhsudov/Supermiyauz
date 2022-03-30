<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Comment;

class CommentController extends Controller
{

    public function index()
    {
        return view('admin.comment.index',['videos'=>Videos::all()]);
    }

    public function delete(Request $request)
    {
        $comment = Comment::find($request->id);
        foreach($comment->replies as $reply){
            $reply->delete();
        }
        return $comment->delete()?redirect()->route('admin.comment.index')->with(['success'=>"Successfully deleted"]):route('admin.comment.index',['errors'=>"Failed to delete"]);
    }

    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;
        $comment->user()->associate($request->user());
        $video = Videos::find($request->video_id);
        $video->comments()->save($comment);

        return back();
    }

    public function reply(Request $request)
    {
        $reply = new Comment;
        $reply->comment = $request->get('comment');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $video = Videos::find($request->get('video_id'));
        $video->comments()->save($reply);

        return back();

    }
}
