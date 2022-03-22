<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;
use App\Mail\WelcomeEmail;
use App\Events\RegisteredEvent;
use App\Events\CreatedUser;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendMailJod;
use App\Mail\TestEmail;


class RegistersController extends Controller
{
    protected $user;
    protected $jobs;
    
    public function __construct(User $user,SendMailJod $jobs)
    {
        $this->user = $user;
        $this->jobs = $jobs;
    }

    function getregister()
    {
       return view('Register',['title'=>'đăng ký']);

    }

    function postregister(CreateUserRequest $request)
    {

        $request['role'] = "2";
        $request['classroom_id'] = "2";     
        $user = $this->user->checkregister($request);
        $email =  $request->mail_address;
        $name = $request->name;

         event(new CreatedUser($email,$name));
        
        if($user == true)
        {
          event(new CreatedUser($email,$name));
        }
        return redirect('/home');
    }


}
