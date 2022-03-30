<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Roles;
use App\Models\Permission;
use Auth;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard',['permissions'=> Permission::where('user_id',Auth::id())->get()]);
        // return view('user.dashboard');
    }
    public function edit(){
        return view('user.edit',['user'=>Auth::user(),'roles'=>User::rolesList()]);
    }

    public function update(Request $request){
        
        $user = User::find($request->id);
        if(($request->password && $request->password)&& !strcmp($request->password, $request->password) ){
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                return redirect()->route('user.edit')->with(['success'=>"Successfully updated"]);
        }
        return redirect()->route('user.edit')->with(['errors'=>"Failed update"]);
    }

    public function transactions(){
        return view('user.transaction.index',['transactions'=>Transaction::where('phone',Auth::user()->phone)->get()]);
    }
}
