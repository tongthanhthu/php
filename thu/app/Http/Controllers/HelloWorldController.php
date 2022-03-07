<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    function index(){
      dd(request->key);

     return view('Register');
    }
}
