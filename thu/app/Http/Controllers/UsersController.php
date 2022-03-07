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
    function index(){
                if(request()->key){
           dd(request()->key);
        }
    }


    function getregister(){

     return view('Register',['title'=>'thêm người dùng']);
    }

    function postregister(CreateUserRequest $request){
         
      $this->user->checkregister($request);
      return redirect('list');
    }
    function list(){

        return view('list',['listall'=> $this->user->listAll(),'title'=>'danh sach']);
    }
}
