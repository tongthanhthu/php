<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    function show(){

       return view('hello_world.show');

    }
}
