<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function show(){
        return view('admin.user.index',['users'=>User::all()]);
    }
    public function create(){
        return view('admin.user.create',['roles'=>User::rolesList()]);
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required','regex:/^\D{2,}$/',
            'phone' => ['required', 'unique:users','regex:/\d{9,12}/'],
        ]);
    
        $phone = $request->phone;
        if(strlen($request->phone)==9) $phone = "998".$request->phone;

        $password = Str::random(8);
        User::create([
            'name' => $request->name,
            'phone' => $phone,
            'password'=> Hash::make($password),
            'role' => $request->role
        ]);
        $message = "Congratulation!\nYou have successfully created account\nYour login:".$phone."\nYour password:".$password;

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
        return redirect()->route('admin.user.index')->with(['success'=>"Successfully created"]);
        // return view('admin.users.create',['roles'=>User::rolesList()]);
    }
    public function delete(Request $request){
        return User::find($request->id)->delete()?redirect()->route('admin.user.index')->with(['success'=>"Successfully deleted"]):route('admin.user.index',['errors'=>"Failed to delete"]);
    }
    
    public function edit(Request $request){
        return view('admin.user.edit',['user'=>User::find($request->id),'roles'=>User::rolesList()]);
    }
    public function update(Request $request){
        $user = User::find($request->id);
        
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('admin.user.index')->with(['success'=>"Successfully edited"]);
    }
}
