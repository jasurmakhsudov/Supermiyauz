<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Courses;
use App\Models\User;

class PermissionController extends Controller
{
    public function index()
    {
        return view('admin.permission.index',['permissions'=>Permission::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create',['users'=>User::where('role','User')->get(),'courses'=>Courses::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Permission::create([
            'user_id'=>$request->user_id,
            'course_id'=>$request->course_id,
            'transaction_id'=>$request->transaction,
            'permission'=>'1'
        ]);
        return redirect()->route('admin.permission.index')->with(['success'=>"Successfully created"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        return Permission::find($request->id)->delete()?redirect()->route('admin.permission.index')->with(['success'=>"Successfully deleted"]):route('admin.permission.index',['errors'=>"Failed to delete"]);
    }
}
