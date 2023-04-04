<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
    // dd($request->all());
     if (Auth::attempt($request->only('username','password'))){
         return redirect('/beranda');
        }
        return redirect('/login');
    }

    
    
}

