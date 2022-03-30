<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Auth;


class CoursesController extends Controller
{
    public function index()
    {
        return view('user.course.index',['courses'=>Courses::all(),'permissions'=>Permission::where('user_id',Auth::id())   ]);
    }

    public function show(Request $request){
        return view('user.course.show',['course'=>Courses::findorfail($request->id)]);
    }

    public function pay(Request $request){
        $token = Transaction::where('phone',Auth::user()->phone)->first();
        if($token){
            return view('user.course.pay',['course'=>Courses::find($request->id),'token'=>$token->token]);    
        }
        return view('user.course.pay',['course'=>Courses::find($request->id),'token'=>null]);    
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $courses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $courses)
    {
        //
    }
}
