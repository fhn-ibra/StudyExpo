<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftarController extends Controller
{
    public function index(){
        if(Auth::user()->google_id != null){
            return view('guest');
        } else {
            return redirect()->route('pendaftar');
        }
    }
}
