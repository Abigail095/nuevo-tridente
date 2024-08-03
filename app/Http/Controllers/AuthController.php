<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('user', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('dashboard');
        }

        return redirect('login')->withErrors('Invalid credentials');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}