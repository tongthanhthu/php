<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUserRequest;
 use Session;

class UsersController extends Controller
{
    protected $user;
    
    public function __construct(User $user){
        $this->user = $user;
    }

    function getaddUsers(){

     return view('addUsers',['title'=>'thêm người dùng']);
    }

    function postaddUsers(CreateUserRequest $request){        
       $user =  $this->user->checkregister($request);
     if($user){
        Session::flash('success','tạo thành công tài khoản');
         return redirect('list');
     }
    }
    function list(){

        return view('list',['listall'=> $this->user->listAll(),'title'=>'danh sach']);
    }

}
