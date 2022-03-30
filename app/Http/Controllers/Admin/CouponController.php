<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        return view('admin.coupon.index',['coupons'=>Coupon::all()]);
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(Request $request)
    {
        Coupon::create([
            'name'=>$request->name,
            'code'=>$request->code,
            'discount'=>$request->discount
        ]);
        return redirect()->route('admin.coupon.index')->with(['success'=>"Successfully edited"]);
    }
    
    public function edit(Request $request)
    {
        return view('admin.coupon.edit',['coupon'=>Coupon::find($request->id)]);
    }

    public function update(Request $request)
    {
        $coupon = Coupon::find($request->id);
        
        $coupon->name = $request->name;
        $coupon->discount = $request->discount;
        $coupon->active = $request->has('active');
        $coupon->save();
        return redirect()->route('admin.coupon.index')->with(['success'=>"Successfully edited"]);
    }

    public function delete(Request $request)
    {
        return Coupon::find($request->id)->delete()?redirect()->route('admin.coupon.index')->with(['success'=>"Successfully deleted"]):route('admin.coupon.index',['errors'=>"Failed to delete"]);
    }
}
