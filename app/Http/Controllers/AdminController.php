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
                'sesi2' => Sesi2::all(),
                'title' => 'Sesi 2'
            ]);
        }
    }

    public function delete_pendaftar($id){
        Pendaftar::destroy($id);
        return redirect()->route('pendaftar')->with(['delete' => true]);
    }

    public function edit1(Request $request, $id){
        $data = Sesi1::find($id);
        $data->stok = $request->stok;
        $data->save();
        return redirect()->route('sesi1')->with(['modal' => true]);
    }

    public function edit2(Request $request, $id){
        $data = Sesi2::find($id);
        $data->stok = $request->stok;
        $data->save();
        return redirect()->route('sesi2')->with(['modal' => true]);
    }
}
