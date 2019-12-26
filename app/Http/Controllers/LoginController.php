<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Session;

class LoginController extends Controller
{
  public function loginuser(Request $request)
  {
    $email=$request->email;
    $password=$request->password;

    $newlogin= new Login;
    $user=$newlogin::where('email',$email)->where('password',$password)->first();

    if($user!=null)
    {
      $signedusername=$user->username;
      session(['username'=>$signedusername]);
      return view('dashboard')->with('username',$signedusername);
    }else {
      Session::flash('message','Check Login Details');
      Session::flash('alert-type','alert-warning');
      return view('login');
    }
  }

  public function logout(Request $request)
  {
    if ($request->session()->has('username'))
    {
      session_unset();
      Session::flash('message','Goodbye');
      Session::flash('alert-type','alert-success');
      return redirect()->route('clear');
    }
  }
}
