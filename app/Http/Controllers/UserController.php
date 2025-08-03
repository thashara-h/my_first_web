<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
      

//crud logic
    public function loadAllUsers(){
       $all_users=User::all(); 
       return view('manageusers');
    }
    public function loadAddUserForm(){
        return view('add-user');
    }
    public function AddUser(Request $request){
        //perform form validation
        $request->validate([
          'name'=>'required|string',
          'email'=>'required|email'|'unique:users',
          'address'=>'required|string',
          'phone_number'=>'required|integer',
          'password'=>'required|confirmed|min:4|max:8',

        ]);
    }
}
