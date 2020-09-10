<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/PL-Kuda/dashboard');
        }
        return redirect('/PL-Kuda/login');
    }
    public function logout()
    {
      Auth::logout();
      return redirect('/PL-Kuda/login');
    }

}
