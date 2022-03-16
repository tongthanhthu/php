<?php

namespace App\Models;
use Session;
use Mail;
use Illuminate\Database\Eloquent\Model;
use App\Models\classrooms;

class User extends Model
{
    protected $fillable = [
        'mail_address',
        'password',
        'name',
        'address',
        'phone',
        'role',
        'classroom_id'
    ];
    public function classrooms()
    {
        return $this->belongsTo('App\Models\classrooms','classroom_id','id');
    }

    public function checkregister($request)
    {
      
     try{
      User::create([
      'mail_address'=> (string) $request->input('mail_address'),
      'password'=> (string)bcrypt( $request->input('password')),
      'name'=> (string) $request->input('name'),
      'address'=> (string) $request->input('address'),
      'phone'=> (string) $request->input('phone'),
      'role'=> (string) $request->input('role'),
      'classroom_id'=> (int) $request->input('classroom_id')  
      ]);

      Session::flash('success','tạo thành công tài khoản');

        } catch(\Exception $err){

      Session::flash('error',$err->getMessage());
       return false;

      }
     return true;
    }


    public function listAll()
    {
      return User::orderBy('id','asc')->Search()->paginate(20);
    }

    public function scopeSearch($query)
    {
      if($key = request()->key)
        {
         $query = $query->where('name','like','%'.$key.'%')->orwhere('mail_address','like','%'.$key.'%')->orwhere('phone',$key);
        }
        return $query;
     }

    public function scopeSearchClass($query)
    {

       if( $keys = request()->keys)
       {
          $query = classrooms::where('name','like','%'.$keys.'%')->get();
         //dd($query);die();
        }

        return $query;
    }



}
