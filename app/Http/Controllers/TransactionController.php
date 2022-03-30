<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Permission;
use App\Models\Courses;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Auth;
use Log;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.transaction.index',['transactions'=>Transaction::all()]);
    }

    public function create(Request $request){
        $id = uniqid();
        $data = [
            "id" => $id,
            "method"=> "cards.create",
            "params"=> [
                "card"=> [ "number"=> "$request->card_number", "expire"=> "$request->card_expire"],
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
            
        $payme = Transaction::create([
            'id'=>$id,
            'name' => $request->name?$request->name:Auth::user()->name,
            'phone' => $request->phone?$request->phone:Auth::user()->phone,
            'leed_id' => $request->leed_id,
            'course_id' => $request->course_id,
            'card_number'=> $request->card_number,
            'card_expire'=> $request->card_expire,
            'token' => $token,
            'status'=> 'Not Verified'
        ]);
        return $response;
    }


    public function verify(Request $request)
    {
        $invoice = Transaction::find($request->id);
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

        if(isset($response->error)){
            if($response->error->code == "-32602" || $response->error->code == "-31103") return ["error"=>"Xato kod kiritildi!"];
            if($response->error->code == "-31101" || $response->error->code == "-31102") return ["error"=>"Urinishlar soni tugadi! Qaytadan urinib ko'ring!"];
            return ["error"=>$response->error->message];
        }

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
        $course = Courses::find($invoice->course_id);
        $coupon = Coupon::where('code',strtoupper($request->referral))->first();
        $amount = str_replace(",", "", $course->price);
        
        if($coupon){
            if($coupon->active){
                $amount = $amount*(100-$coupon->discount)/100;
                $invoice->referral_id = $coupon->id;
            }
        }
        
        $data = [
            "id" => $invoice->id,
            "method"=> "receipts.create",
            "params"=> [
                "amount" => intval($amount."00"),
                "description" => $course->title,
                "account"=> [
                    "order_id"=> rand()
                ],
            ]
        ];
        
        // return $data;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d:aNph025NFrMewSccnVZHmxwFCVxgHg#y12HU',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);

        $response = json_decode($response->body());
        // return $response;
        $invoice->invoice_id = $response->result->receipt->_id;
        $invoice->invoice_created_time = $response->result->receipt->create_time;
        $invoice->save();

        $data = [
            "id" => $invoice->id,
            "method"=> "receipts.pay",
            "params"=> [
                "id" => $invoice->invoice_id,
                "token" => $invoice->token,
                "payer"=> [
                    "phone"=> $invoice->phone
                ]
            ]
        ];
        
        // return $data;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d:aNph025NFrMewSccnVZHmxwFCVxgHg#y12HU',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);

        $response = json_decode($response->body());
        
        if(isset($response->error)){
            if($response->error->code == "-31630" || $response->error->code == "-31103") return ["error"=>"Hisobingizda mablag' yetarli emas!"];
            return ["error"=>$response->error->message];
        }
        
        // $invoice->invoice_pay_time = $response->result->_id;    
        $invoice->invoice_pay_time = $response->result->receipt->pay_time;
        $invoice->amount = $amount;
        $invoice->save();

        $phone = $invoice->phone;
        if(strlen($invoice->phone)==9) $phone = "998".$invoice->phone;

        $password = Str::random(8);
        
        if(!User::where('phone',$phone)->exists()){
            $user = User::create([
                'name' => $invoice->name,
                'phone' => $phone,
                'token' => $invoice->token,
                'password'=> Hash::make($password)
            ]);
            $message = "Congratulation!\nYou have successfully created Account ".$course->title." course\nYour login:".$phone."\nYour password:".$password."\nWebsite: supermiya.uz/login";
        }else{
            $user = User::where('phone',$phone)->first();
            $user->token = $invoice->token;
            $user->save();
            $message = "Congratulation!\nYou are successfully joined ".$course->title." course\nYour login:".$phone."\nWebsite: supermiya.uz/login";
        }
        
        if(!Permission::where('user_id',$user->id)->where('course_id',$invoice->course_id)->exists())
            Permission::create([
                'user_id'=>$user->id,
                'course_id'=>$invoice->course_id,
                'transaction_id'=>$invoice->id,
                'permission'=>'1'
            ]);
            // return "s";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'notify.eskiz.uz/api/auth/login');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $post = array(
            'email' => "xayotwork@gmail.com",
            'password' => "6XV9MJBbZmSBYM31SQoV9DYIGqFN3d87vXGRd9NS"
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_setopt($ch, CURLOPT_URL, 'notify.eskiz.uz/api/message/sms/send');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $post = array(
            'mobile_phone' => $phone,
            'message' => $message,
            'from' => "Dovranbek",
            'callback_url' => "http://0000.uz/test.php"
        );  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        $headers = array();
        $headers[] = "Authorization: Bearer ".json_decode($result)->data->token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return "success";
    }

    public function direct(Request $request)
    {
        $id = uniqid();
        $phone = $request->phone;
        if(strlen($request->phone)==9) $phone = "998".$request->phone;

        $course = Courses::find($request->course_id);
        $coupon = Coupon::where('code',strtoupper($request->code))->first();
        $amount = str_replace(",", "", $course->price);

        if(!User::where('phone',$phone)->exists()){
            return "error";
        }else{
            $user = User::where('phone',$phone)->first();
            $invoice = Transaction::create([
                'id' => $id,
                'name' => $user->name,
                'phone' => $user->phone,
                'course_id' => $request->course_id,
                'token' => $user->token,
                'status'=> 'Not Verified'
            ]);
        }
        $data = [
            "id" => $id,
            "method"=> "receipts.create",
            "params"=> [
                "amount" => intval($amount."00"),
                "description" => $course->title,
                "account"=> [
                    "order_id"=> rand()
                ],
            ]
        ];
        
        // return $data;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d:aNph025NFrMewSccnVZHmxwFCVxgHg#y12HU',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);

        $response = json_decode($response->body());
        // return $response;
        $invoice->invoice_id = $response->result->receipt->_id;
        $invoice->invoice_created_time = $response->result->receipt->create_time;
        $invoice->save();

        $data = [
            "id" => $invoice->id,
            "method"=> "receipts.pay",
            "params"=> [
                "id" => $invoice->invoice_id,
                "token" => $user->token,
                "payer"=> [
                    "phone"=> $invoice->phone
                ]
            ]
        ];
        
        // return $data;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d:aNph025NFrMewSccnVZHmxwFCVxgHg#y12HU',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);

        $response = json_decode($response->body());

        if(isset($response->error)){
            if($response->error->code == "-31630" || $response->error->code == "-31103") return ["error"=>"Hisobingizda mablag' yetarli emas!"];
            return ["error"=>$response->error->message];
        }
        
        // $invoice->invoice_pay_time = $response->result->_id;    
        $invoice->invoice_pay_time = $response->result->receipt->pay_time;
        $invoice->amount = $amount;
        $invoice->save();

        $phone = $invoice->phone;
        if(strlen($invoice->phone)==9) $phone = "998".$invoice->phone;

        $message = "Congratulation!\nYou are successfully joined ".$course->title." course\nYour login:".$phone."\nWebsite: supermiya.uz/login";
        
        if(!Permission::where('user_id',$user->id)->where('course_id',$invoice->course_id)->exists())
            Permission::create([
                'user_id'=>$user->id,
                'course_id'=>$invoice->course_id,
                'transaction_id'=>$invoice->id,
                'permission'=>'1'
            ]);
            // return "s";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'notify.eskiz.uz/api/auth/login');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $post = array(
            'email' => "xayotwork@gmail.com",
            'password' => "6XV9MJBbZmSBYM31SQoV9DYIGqFN3d87vXGRd9NS"
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_setopt($ch, CURLOPT_URL, 'notify.eskiz.uz/api/message/sms/send');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $post = array(
            'mobile_phone' => $phone,
            'message' => $message,
            'from' => "Dovranbek",
            'callback_url' => "http://0000.uz/test.php"
        );  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        $headers = array();
        $headers[] = "Authorization: Bearer ".json_decode($result)->data->token;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $user->token = "";
        $user->save();
        return "success";

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     // file_put_contents(public_path().'/abs.txt', $request->message);
    //     // return response()->json($request);
    //     Transaction::create([
    //         'id' => $request->id,
    //         'name' => $request->name,
    //         'phone' => $request->phone,
    //         'leed_id' => $request->leed_id,
    //         'referral' => $request->referral,
    //         'token' => $request->token,
    //         'invoice_id' => $request->invoice_id,
    //         'card_number'=> $request->card_number,
    //         'expire' => $request->expire,
    //         'course_id' => $request->course_id,
    //         'method' => $request->method,
    //         'amount' => substr($request->amount,0,-2),
    //         'invoice_created_time' => $request->created_time,
    //         'invoice_pay_time' => $request->pay_time,
    //     ]);
        
        
        
    //     if(strlen($request->phone)==9){
    //         $phone = "998".$request->phone;
    //     }else{
    //         $phone = $request->phone;
    //     }

    //     if(strlen($request->phone)!=12){

    //     }

    //     $password = Str::random(8);
        
    //     if(!User::where('phone',$phone)->exists()){
    //         $user = User::create([
    //             'name' => $request->name,
    //             'phone' => $phone,
    //             'password'=> Hash::make($password)
    //         ]);
    //     }else{
    //         $user = User::where('phone',$phone)->first();
    //     }
    //     $price = str_replace(',', '',Courses::find($request->course_id)->price);
    //     $coupon = Coupon::where('code',$request->referral)->first();
    //     if(!empty($coupon)){
    //         if(substr($request->amount,0,-2) == $price*(100-$coupon->discount)/100){
    //             Permission::create([
    //                 'user_id'=>$user->id,
    //                 'course_id'=>$request->course_id,
    //                 'transaction_id'=>$request->id,
    //                 'permission'=>'1'
    //             ]);
    //         }
    //     }else{
    //         if(substr($request->amount,0,-2) == $price){
    //             Permission::create([
    //                 'user_id'=>$user->id,
    //                 'course_id'=>$request->course_id,
    //                 'transaction_id'=>$request->id,
    //                 'permission'=>'1'
    //             ]);
    //         }
    //     }

    //     $message = "Congratulation!\nYou are successfully joined course\nYour login:".$phone."\nYour password:".$password;

    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, 'notify.eskiz.uz/api/auth/login');
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     $post = array(
    //         'email' => "xayotwork@gmail.com",
    //         'password' => "6XV9MJBbZmSBYM31SQoV9DYIGqFN3d87vXGRd9NS"
    //     );
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    //     $result = curl_exec($ch);
    //     if (curl_errno($ch)) {
    //         echo 'Error:' . curl_error($ch);
    //     }
    //     curl_setopt($ch, CURLOPT_URL, 'notify.eskiz.uz/api/message/sms/send');
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     $post = array(
    //         'mobile_phone' => $phone,
    //         'message' => $message,
    //         'from' => "Dovranbek",
    //         'callback_url' => "http://0000.uz/test.php"
    //     );  
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

    //     $headers = array();
    //     $headers[] = "Authorization: Bearer ".json_decode($result)->data->token;
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    //     $result = curl_exec($ch);
    //     if (curl_errno($ch)) {
    //         echo 'Error:' . curl_error($ch);
    //     }
    //     curl_close($ch);
        
    //     return response()->json("Successful");
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
