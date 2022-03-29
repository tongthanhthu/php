<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\classrooms;
use App\Http\Requests\CreateUserRequest;
use Session;

class UsersController extends Controller
{
    protected $user;
    
    public function __construct(User $user){
        $this->user = $user;
    }

    function getaddUsers(){

     $classrooms = classrooms::all();
     return view('addUsers',['title'=>'thêm người dùng','classrooms'=>$classrooms]);
    }

    function postaddUsers(CreateUserRequest $request){        
      $this->user->checkregister($request);
       return redirect('list');
    }
    function list(){

        return view('list',['listall'=> $this->user->listAll(),'title'=>'danh sach']);
    }

}
