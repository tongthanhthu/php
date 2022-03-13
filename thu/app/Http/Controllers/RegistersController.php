<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Mail\WelcomeEmail;
use App\Events\RegisteredEvent;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendMailJod;


class RegistersController extends Controller
{
    protected $user;
    protected $jobs;
    
    public function __construct(User $user,SendMailJod $jobs){
        $this->user = $user;
        $this->jobs = $jobs;
    }

    function getregister(){

     return view('Register',['title'=>'đăng ký']);

    }

    function postregister(CreateUserRequest $request)
    {

        $request['role'] = "2";
        
        $user = $this->user->checkregister($request);    

       //new SendMailJod($request)
       if($user== true){
           $this->jobs->handle($request);
           return redirect('login');
         }
      return redirect('/home');
    }


}
