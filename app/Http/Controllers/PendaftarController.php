<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Sesi1;
use App\Models\Sesi2;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendaftarController extends Controller
{
    public function index()
    {
        $validasi = Pendaftar::where('id_user', Auth::user()->id)->first();

        if (Auth::user()->google_id != null) {
            if ($validasi != null) {
                return redirect()->route('cetak');
            } else {
                $email = explode('@', Auth::user()->email)[1];
                if (!in_array($email, ['smkprestasiprima.sch.id', 'smaprestasiprima.sch.id'])) {
                    return redirect()->route('logout')->with(['error' => true]);
                } else {
                    return view('guest', [
                        'a1' => Sesi1::where('id', 1)->value('stok'),
                        'a2' => Sesi1::where('id', 2)->value('stok'),
                        'a3' => Sesi1::where('id', 3)->value('stok'),
                        'a4' => Sesi1::where('id', 4)->value('stok'),
                        'a5' => Sesi1::where('id', 5)->value('stok'),
                        'b1' => Sesi2::where('id', 1)->value('stok'),
                        'b2' => Sesi2::where('id', 2)->value('stok'),
                        'b3' => Sesi2::where('id', 3)->value('stok'),
                        'b4' => Sesi2::where('id', 4)->value('stok'),
                        'b5' => Sesi2::where('id', 5)->value('stok'),
                    ]);
                }
            }
        } else {
            return redirect()->route('pendaftar');
        }
    }

    public function save(Request $request)
    {

        $sesi1 = Sesi1::findOrFail($request->sesi1);
        $sesi2 = Sesi2::findOrFail($request->sesi2);

        if ($sesi1->stok <= 0) {
            return redirect()->back()->with(['modal' => true]);
        }


        if ($sesi2->stok <= 0) {
            return redirect()->back()->with(['modal' => true]);
        }

        if ($sesi1->id == $sesi2->id) {
            return redirect()->back()->with(['error' => true]);
        }

        $sesi1->stok -= 1;
        $sesi1->save();

        $sesi2->stok -= 1;
        $sesi2->save();

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

    public function cetak()
    {
        $validasi = Pendaftar::where('id_user', Auth::user()->id)->first();
        if ($validasi != null) {

            $email = explode('@', Auth::user()->email)[1];
            if (!in_array($email, ['smkprestasiprima.sch.id', 'smaprestasiprima.sch.id'])) {
                return redirect()->route('logout')->with(['error' => true]);
            } else {
                return view('cetak', ['data' => $validasi]);
            }
        } else {
            return redirect()->route('guest');
        }
    }
    public function print()
    {
        $validasi = Pendaftar::where('id_user', Auth::user()->id)->first();
        if ($validasi != null) {

            $pdf = PDF::loadview('print', ['data' => $validasi]);
            return $pdf->stream();
        } else {
            return redirect()->route('guest');
        }
    }
}
