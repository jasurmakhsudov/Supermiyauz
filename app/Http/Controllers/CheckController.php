<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coupon;

class CheckController extends Controller
{
    public function phone(Request $request){
        if(strlen($request->phone)==9){
            $phone = "998".$request->phone;
        }else{
            $phone = $request->phone;
        }
        return response()->json(User::where('phone',$phone)->exists());
    }

    public function referral(Request $request){
        $coupon = Coupon::where('code',strtoupper($request->code))->first();
        if($coupon)
            if($coupon->active)
                return $coupon;
        return ;
    }
}
