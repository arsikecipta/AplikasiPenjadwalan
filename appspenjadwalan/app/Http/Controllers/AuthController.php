<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('home_kaurlab');
    }
    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }
        return redirect('/')->with('gagal','Username dan Password anda Salah!');;
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}