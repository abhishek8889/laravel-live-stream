<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auther;
use App\Models\User;
use Auth;
use Hash;


class Test extends Controller
{
    public function index(){
      $userList = User::all();
     
      return view('front.login');
    }
    public function register(request $req){
      $validated = $req->validate([
        'email' => 'required|unique:posts|max:255',
        'password' => 'required',
      ]);
        // $user = new User;
        // $user->name = $req->name;
        // $user->email = $req->email;
      $email = $req->email;
      $password = Hash::make($req->password);
      
        User::create();
       
        return "you are succesfully registered";
    }
    public function login(request $req){
      $email = $req->email;
      $password = $req->password;
      $credentials = array('email'=>$email, 'password' => $password);
      if (Auth::attempt($credentials)) {
        return redirect('/');
      }
    }
}
