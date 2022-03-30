<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CustomAuthController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            if(Auth::user()->isAdmin()){
                return redirect()->route('admin.dashboard')
                        ->withSuccess('Signed in');    
            }
            return redirect()->route('user.dashboard')
                        ->withSuccess('Signed in'); 
        }
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
        $phone = $request->phone;
        if(strlen($request->phone)==9) $phone = "998".$request->phone;

        $credentials = [
            'phone' => $phone,
            'password' =>$request->password
        ];
        if (Auth::attempt($credentials)) {
            if(Auth::user()->isAdmin()){
                return redirect()->route('admin.dashboard')
                        ->withSuccess('Signed in');    
            }
            return redirect()->route('user.dashboard')
                        ->withSuccess('Signed in');    
        }
  
        return redirect("login")->with(['errors'=>'Login details are not valid']);
    }

    // public function registration()
    // {
    //     return view('auth.registration');
    // }
      
    // public function customRegistration(Request $request)
    // {  
    //     $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required|unique:users',
    //         'password' => 'required|min:6',
    //     ]);
           
    //     $data = $request->all();
    //     $check = $this->create($data);
         
    //     return redirect("dashboard")->withSuccess('You have signed-in');
    // }


    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'phone' => $data['phone'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }    
    
    

    public function dashboard()
    {
        if(Auth::check()){
            return view('auth.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function forgetPassword()
    {
        return view('auth.forget');
    }
    
    public function verifyPassword(Request $request)
    {
        if(strlen($request->phone)==9){
            $phone = "998".$request->phone;
        }else{
            $phone = $request->phone;
        }

        $user = User::where('phone',$phone)->first();
        if($user && $user->isUser()){
            $password = Str::random(8);
            $user->password=Hash::make($password);
            $user->save();
            $message = "Tabriklaymiz!\nParolingiz muvaffaqiyatli tiklandi!\nSizning login:".$phone."\nSizning parolingiz:".$password;
            
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

            return redirect()->route('login')->with(['success'=>"Parolingiz telefon raqamingizga muvaffaqiyatli yuborildi!"]);
        }
        
        return redirect()->route('forget-password')->with(['errors'=>"Iltimos raqamingizni to'g'ri kiriting!"]);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('login');
    }
}