<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;

class UsersController extends Controller
{
        protected $user;
    
    public function __construct(User $user){
        $this->user = $user;
    }

    
    function getregister(){
     return view('Register');
    }

    function postregister(CreateUserRequest $request){
      $this->user->checkregister($request);
      return redirect('list');
    }
    function list(){
        return view('list',['listall'=> $this->user->listAll()]);
    }
}
