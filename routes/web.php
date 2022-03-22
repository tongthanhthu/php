<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegistersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  route::get('/hello_world ',[HelloWorldController::class,'show']);
//route::get('addUsers',[UsersController::class,'getaddUsers']);
 //route::post('addUsers',[UsersController::class,'postaddUsers']);
 //route::get('admin/list',[UsersController::class,'list']);
// route::get('login',[LoginController::class,'login']);
// route::post('store',[LoginController::class,'store']);
 route::get('rregister',[RegistersController::class,'getregister']);
 route::post('rregister',[RegistersController::class,'postregister']);
 //Route::get('test-email', 'JobController@processQueue');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout','HomeController@logout');

route::middleware('adminlogin')->group(function(){
     route::get('list',[UsersController::class,'list']);
     route::middleware('administrator')->group(function(){
        route::get('addUsers',[UsersController::class,'getaddUsers']);
        route::post('addUsers',[UsersController::class,'postaddUsers']);
            });
     });
