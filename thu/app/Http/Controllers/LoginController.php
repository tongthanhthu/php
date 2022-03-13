<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    use ThrottlesLogins;

    protected $maxLoginAttempts = 2; // so lan user co the dang nhap sai
    protected $lockoutTime = 300; // Thoi gian nguoi dung chan tinh bang giay


    function login(){
        return view('users.login',['title'=>'đăng nhập']);
    }
    public function store(Request $request){
        $this->validate($request,[
            'mail_address'=>'required|email:filter',
            'password'=>'required'
        ]);

        if(auth::attempt([
            'mail_address'=> $request->input('email'),
            'password'=> $request->input('password') ],$request->input('remember') )){

            return redirect()->route('list');
        }

        Session::flash('error','email hoặc mật khẩu không chính xác');
        return redirect()->back();
    }

}
