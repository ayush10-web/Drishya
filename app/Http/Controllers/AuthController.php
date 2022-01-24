<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginForm()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
          }else {
            return view("backend.admin.login");
          }
    }
    public function LogInToDashboard(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
        {
            return redirect()->intended('/backend/dashboard')->with(["success_message" => "Logged in succesfully"]);
        }else {
            return redirect()->back()->with(["error_message" => "Email or Password do not match"]);
        }
    }
    public function logout()
    {
      Session::flush();
      Auth::logout();
      return redirect()->intended('/admin/login');
    }
    
}
