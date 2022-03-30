<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Courses;

class HomeController extends Controller
{
    public function index(){
        return view('index',['course'=>Courses::where('title' , '=', 'supermiya')->first()]);
    }

    public function blackcube(){
        return view('index',['course'=>Courses::where('title' , '=', 'blackcube')->first()]);
    }

    public function freevideo(){
        return view('freevideo');
    }
    
    public function login(){
        return view('login');
    }

    public function thankyou(Request $request){
        if(url()->previous() == url('checkout/blackcube')){
            if($request->course_id==2)
                return view('thanks.blackcube',['name'=>$request->name]);
            return view('thanks.supermiya',['name'=>$request->name]);
        }
        abort(404);
    }
}
