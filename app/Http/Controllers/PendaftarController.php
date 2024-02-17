<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftarController extends Controller
{
    public function index(){
        $validasi = Pendaftar::where('id_user', Auth::user()->id)->first();

        if(Auth::user()->google_id != null){
            if($validasi != null) {
                return redirect()->route('cetak');
            } else {
                return view('guest');
            }
        } else {
            return redirect()->route('pendaftar');
        }
    }

    public function save(Request $request){
        
        $pendaftar = new Pendaftar();
        $pendaftar->nama = $request->nama;
        $pendaftar->kelas = $request->kelas;
        $pendaftar->no = $request->hp;
        $pendaftar->sesi1 = $request->sesi1;
        $pendaftar->sesi2 = $request->sesi2;
        $pendaftar->id_user = Auth::user()->id;
        $pendaftar->save();

        return redirect()->route('cetak');

    }

    public function cetak(){
        $validasi = Pendaftar::where('id_user', Auth::user()->id)->first();
        if($validasi != null){
            return view('cetak', ['data' => $validasi]);
        } else {
            return redirect()->route('guest');
        }
    }
}
