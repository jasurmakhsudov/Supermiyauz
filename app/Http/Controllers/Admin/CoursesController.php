<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Videos;

class CoursesController extends Controller
{
    public function index()
    {
        return view('admin.course.index',['courses'=>Courses::all()]);
    }

    public function create()
    {
        return view('admin.course.create');
    }
    public function store(Request $request)
    {
         // $this->validate($request, [
        //     'name' => 'required',
        //     'phone' => ['required', 'string', 'regex:/^\d{9}$/'],
        // ]);
    
        $photo_path="";
        if($request->photo){
            $filename = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('image/course'), $filename);
            $photo_path = "image/course/".$filename;
        }
        
        Courses::create([
            'title' => $request->title,
            'definition' => $request->definition,
            'price' => $request->price,
            'photo'=> $photo_path
        ]);

        return redirect()->route('admin.course.index')->with(['success'=>"Successfully created"]);
    }

    public function delete(Request $request){
        // Courses::find($request->id)->delete();
        // foreach(Courses::find($request->id)->videos as $video){
        //     if(file_exists($video->url)){
        //         unlink($video->url);
        //     }
        // }
        return Courses::find($request->id)->delete()?redirect()->route('admin.course.index')->with(['success'=>"Successfully deleted"]):route('admin.course.index',['errors'=>"Failed to delete"]);
    } 

    public function edit(Request $request){
        return view('admin.course.edit',['course'=>Courses::find($request->id)]);
    }
    public function update(Request $request){
        $course = Courses::find($request->id);
        
        $course->title = $request->title;
        $course->definition = $request->definition;
        $course->price = $request->price;
        $course->visibility = $request->has('visibility');
        $photo_path="";
        if($request->photo){
            $filename = time().'.'.$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('image/course'), $filename);
            $photo_path = "image/course/".$filename;
            $course->photo = $photo_path;
        }
        $course->save();
        return redirect()->route('admin.course.index')->with(['success'=>"Successfully edited"]);
    }
}
