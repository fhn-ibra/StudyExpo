<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('pendaftar');
        }
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();

        if(session('error')){
            return redirect('/')->with(['error' => true]);
        }
        
        return redirect('/');
    }
}
