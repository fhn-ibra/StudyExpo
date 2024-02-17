<?php

namespace App\Http\Controllers;

use App\Models\Sesi1;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function pendaftar(){
        return view('admin.pendaftar', [
            'pendaftar' => Pendaftar::all(),
            'title' => 'Pendaftar'
        ]);
    }

    public function sesi1(){
        return view('admin.sesi1', [
            'sesi1' => Sesi1::all(),
            'title' => 'Sesi 1'
        ]);
    }
}
