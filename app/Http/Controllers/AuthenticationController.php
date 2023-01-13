<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
class AuthenticationController extends Controller
{
    //
    public function index(){
        return view('authentication.login');
    }
    public function registerPage(){
        return view('authentication.register');
    }
    public function login(request $req){
        $email = $req->email;
        $password = $req->password;
        $credentials = array('email'=>$email, 'password' => $password);
        if (Auth::attempt($credentials)) {
          return redirect('/');
        }else{
            return 'there is an error';
        }
    }
    public function register(request $req){
       $req->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password'=>'required'
        ]);
        $email = $req->email;
        $password = Hash::make($req->password);
        $data = array(
            'name' => $req->name,
            'email' => $email,
            'password' => $password
        );
        User::create($data);
         
         return redirect()->route('login');
      }
      public function logout(){
        Auth::logout();
        return redirect('/');
      }
}
