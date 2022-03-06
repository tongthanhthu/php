<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    function index(){
      $w=User::where('id',1)->get();

     
     return view('Register',['w'=>$w]);
    }
}
