<?php

namespace App\Http\Controllers;

use App\Models\Sesi1;
use App\Models\Sesi2;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function pendaftar()
    {
        if (Auth::user()->google_id != null) {
            return redirect()->route('guest');
        } else {
            return view('admin.pendaftar', [
                'pendaftar' => Pendaftar::all(),
                'title' => 'Pendaftar'
            ]);
        }
    }

    public function sesi1()
    {
        if (Auth::user()->google_id != null) {
            return redirect()->route('guest');
        } else {
            return view('admin.sesi1', [
                'sesi1' => Sesi1::all(),
                'title' => 'Sesi 1'
            ]);
        }
    }

    public function sesi2()
    {
        if (Auth::user()->google_id != null) {
            return redirect()->route('guest');
        } else {
            return view('admin.sesi2', [
                'sesi1' => Sesi2::all(),
                'title' => 'Sesi 2'
            ]);
        }
    }
}
