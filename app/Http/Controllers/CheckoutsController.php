<?php

namespace App\Http\Controllers;

use App\Models\Checkouts;
use App\Models\User;
use App\Models\Videos;
use App\Models\Courses;
use Illuminate\Support\Facades\Hash;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Http\File;
use File;
use DB;
class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
            $link = 'checkouts.'.$request->course;
            $course=Courses::where('title' , '=', $request->course)->first();
            $video="";
            // if($request->course=='blackcube'){
            //     $video=Videos::find(227)->url;
            // }
            return view($link,
                ['name'=>$request->name,
                'phone'=>$request->phone,
                'leed_id'=>$request->leed_id,
                'course'=>$course
                // 'video'=>$video
                ]
            );
    }

    public function login(Request $request){
           
        // $result = ;
        // return response()->json($request);
        
        $user = DB::table('users')->where('name',$request->login)->
        where('password',$request->password)->first();
        // return response()->json($user);
        // wherePassword(Hash::make($request->password))->first();
        if ($user)
        {
            $accessToken = bin2hex(random_bytes(16));
            DB::table('users')->where('name',$request->login)->where('password',$request->password)->update(['remember_token' => $accessToken]);
            return response([ 'user' => $request->login, 'access_token' => $accessToken]);
        }
            
        return response()->json("Failed credentials");
            
        return view($link,
                ['name'=>$request->name,
                'phone'=>$request->phone,
                'leed_id'=>$request->leed_id,
                'course'=>$request->course]
            );
    }

    public function create(Request $request)
    {
        $user = DB::table('users')->where('remember_token',$request->access_token)->first();

        if($user){
            return response()->json("success");
        }

        return response()->json("failed to auth");
        // return response()->json("success");
        
        Checkouts::create([
             'name' => $request->name,
             'phone'=>$request->phone,
             'leed_id'=>$request->leed_id,
             'referral'=>$request->referral,
             'course_id'=>$request->course_id,
             'amount' => $request->amount
        ]);

        return response()->json("success");

        if($request->course_id==1){
            return redirect()->route('checkout',[
                'name' => $request->name,
                'course'=> "blackcube"
            ]);
        }
        return redirect()->route('thankyou',[
            'name' => $request->name,
            'course_id'=>$request->course_id
        ]);
    }


    public function invoice(Request $request){ 
        
        // price = Courses::find($request->course_id)->price;
        if(mad5($price))
        Transaction::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'amount'=>$amount
        ]);
        dd(md5("100000")==$request->amount);
            $link = 'checkouts.'.$request->course;
            return view($link,
                ['name'=>$request->name,
                'phone'=>$request->phone,
                'leed_id'=>$request->leed_id,
                'course'=>$request->course]
            );
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
     * Display the specified resource.
     *
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function show(Checkouts $checkouts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkouts $checkouts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkouts $checkouts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkouts  $checkouts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkouts $checkouts)
    {
        //
    }
}
