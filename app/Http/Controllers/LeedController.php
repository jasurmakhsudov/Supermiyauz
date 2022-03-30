<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leeds;
use App\Models\Transaction;
use DB;

class LeedController extends Controller
{
    public function index()
    {
        return view('admin.leed.index',['leeds'=>Leeds::all(),'roles'=>Leeds::rolesList()]); 
    }

    public function list()
    {
        $leeds = Leeds::all();  
        $i=0;
        foreach($leeds as $leed){
            if(isset($leed->transactions))
                foreach($leed->transactions as $transaction)
                    if(isset($transaction->invoice_pay_time)){
                        $leeds->forget($i);
                        break;
                    }
            $i++;
        }
        return view('admin.leed.list',['leeds'=>$leeds]); 
    }

    public function listPaid()
    {
        $transactions = Transaction::whereNotNull('leed_id')->whereNotNull('invoice_pay_time')->get()->unique('leed_id');
        return view('admin.leed.listPaid',['transactions'=>$transactions]); 
    }

    public function create(Request $request){
        
        $request->validate([
            'phone' => 'integer|digits_between:7,15',
        ]);
        $phone = $request->phone;
        if(strlen($request->phone)==9) $phone = "998".$request->phone;

        $leed = Leeds::create([
            'name' => $request->name,
            'phone'=> $phone,
            'course'=> $request->course
        ]);

        return $leed->id;
        return redirect()->route('checkout.index',
            [
             'name' => $request->name,
             'phone'=> $phone,
             'course'=>$request->course,
             'leed_id'=>$leed->id
             ]
        );
    }

    public function delete(Request $request){
        return Leeds::find($request->id)->delete()?redirect()->back()->with(['success'=>"Successfully deleted"]):route('admin.leed.index',['errors'=>"Failed to delete"]);
    }
    
}
