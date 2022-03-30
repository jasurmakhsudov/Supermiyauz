<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymeController extends Controller
{
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

        $data = [
            "id" => $id,
            "method"=> "cards.get_verify_code",
            "params"=> [
                "token"=> $response->result->card->token
            ]
        ];
        
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'X-Auth' => '61407fc428b8a10c3657ba9d',
            'Content-Type' => 'application/json'
            ])->post('https://checkout.paycom.uz/api', $data);

            $response = json_decode($response->body());
        return $response->result;
    }
}
