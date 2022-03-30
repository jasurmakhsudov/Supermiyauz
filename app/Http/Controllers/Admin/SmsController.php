<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SmsController extends Controller
{
    public function index()
    {
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
        $token = json_decode($result)->data->token;
        for($i=1;$i<10;$i++){
            curl_setopt($ch, CURLOPT_URL, 'notify.eskiz.uz/api/message/sms/get-user-messages?page='.$i);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
            
            $post = array(
                'start_date' => "2020-12-01 12:00",
                'end_date' => date("Y-m-d H:i:s"),
                'user_id' => "586"
            );
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            
            $headers = array();
            $headers[] = "Authorization: Bearer ".$token;
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            $data[] = json_decode($result)->data->data;
            // dd($data);
            if(!json_decode($result)->data->data){
                // dd($data);    
                break;
            }
        }
        curl_close($ch);
        // dd($result);
        // return redirect()->route('admin.sms.index',['messages'=>json_decode($result)]);
        return view('admin.sms.index',['messages'=>$data]);
    }

    public function create()
    {
        return view('admin.sms.create',['phones'=> User::allUser()->pluck('phone')]);
    }

    public function send(Request $request)
    {
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
            'mobile_phone' => $request->phone,
            'message' => $request->message,
            'from' => "4546",
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
        return redirect()->route('admin.sms.index')->with(['success'=>"Successfully sent"]);
    }   
}

