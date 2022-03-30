<?php

namespace App\Http\Controllers;

use App\Models\Payme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Courses;
use App\Models\Coupon;

class PaymeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        $id = uniqid();
        $data = [
            "id" => $id,
            "method"=> "cards.create",
            "params"=> [
                "card"=> [ "number"=> "$request->number", "expire"=> "$request->expire"],
                "save"=> true
            ]
        ];
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);
        $response = json_decode($response->body());
        if(isset($response->error)) return ["error"=>"Xato ma'lumot kiritildi!"];

        $token = $response->result->card->token;
        $data = [
            "id" => $id,
            "method"=> "cards.get_verify_code",
            "params"=> [
                "token"=> $token
            ]
        ];
        
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);

        $response = json_decode($response->body());

        $payme = Payme::create([
            'id'=>$id,
            'card_number'=>$request->number,
            'card_expire'=>$request->expire,
            'token' => $token,
            'phone_number'=> $response->result->phone,
            'status'=> 'Not Verified'
        ]);
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        // var data = `{
        //     "id": "${id}",
        //     "method": "cards.verify",
        //     "params": {
        //       "token": "${token}",
        //       "code": "${code}"
        //     }
        // }`;
        // return $request->course_id;
        
        $invoice = Payme::find($request->id);
        $data = [
            "id" => $invoice->id,
            "method"=> "cards.verify",
            "params"=> [
                "token"=> $invoice->token,
                "code"=> $request->code
            ]
        ];
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);
        $response = json_decode($response->body());
        
        // return $response->error->code=="-31101";
        // -32602
        // -31101
        // return $response;

        // if(isset($response->error)){
        //     if($response->error->code == "-32602" || $response->error->code == "-31103") return ["error"=>"Xato kod kiritildi!"];
        //     if($response->error->code == "-31101" || $response->error->code == "-31102") return ["error"=>"Urinishlar soni tugadi! Qaytadan urinib ko'ring!"];
        //     return ["error"=>$response->error->message];
        // }

        $invoice->status = "Verified";
        $invoice->save();
        
        //
                // return $response;

        // data = `{
        //     "id": "${id}",
        //     "method": "receipts.create",
        //     "params": {
        //       "amount": ${amount}00,
        //       "description": "{{$course->title}}",
        //       "account": {
        //           "order_id": 106
        //       }
        //     }
        // }`;
        $course = Courses::find($request->course_id);
        $coupon = Coupon::where('code',strtoupper($request->referral))->first();
        $amount = str_replace(",", "", $course->price);

        if($coupon) $amount = $amount*(100-$coupon->discount)/100;
        
        $data = [
            "id" => $invoice->id,
            "method"=> "receipts.create",
            "params"=> [
                "amount" => intval($amount),
                "description" => $course->title,
                "account"=> [
                    "order_id"=> rand()
                ],
            ]
        ];

        // return $data;
        // return $data;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d:aNph025NFrMewSccnVZHmxwFCVxgHg#y12HU',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);

        $response = json_decode($response->body());

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payme  $payme
     * @return \Illuminate\Http\Response
     */
    public function show(Payme $payme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payme  $payme
     * @return \Illuminate\Http\Response
     */
    public function edit(Payme $payme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payme  $payme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payme $payme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payme  $payme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payme $payme)
    {
        //
    }
}
