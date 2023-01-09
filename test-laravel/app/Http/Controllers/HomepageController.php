<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Loker;
use App\Models\Materi;
use App\Models\Pelatihan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{

    public function materi()
    {
        $materi = Materi::all();

        return view('homepage.materi', compact('materi'));
    }

    public function pelatihan()
    {
        $pelatihan = Pelatihan::all();

        return view('homepage.pelatihan', compact('pelatihan'));
    }

    public function loker()
    {
        $loker = Loker::all();

        return view('homepage.loker', compact('loker'));
    }

    public function pendaftaran_pelatihan($id)
    {
        $pelatihan = Pelatihan::find($id);

        return view('homepage.pendaftaran-pelatihan',compact('pelatihan'));
    }

    public function upload_pendaftaran(Request $request,$id)
    {
        $pelatihan = Pelatihan::find($id);
        $pendaftaran = new Pendaftaran();
        $user = Auth::user();
        $time = Carbon::now();

        $file = $request->file('bukti_pembayaran');
        $filename = $file->getClientOriginalName();
        $lokasi_file = 'Bukti Pembayaran';

        $file->move($lokasi_file,$user->name.'-'.$filename);

        $pendaftaran->id_user = $user->id;
        $pendaftaran->id_pelatihan = $pelatihan->id;
        $pendaftaran->bukti_pembayaran = $user->name.'-'.$filename;
        $pendaftaran->status = 'Belum dikonfirmasi';
        $pendaftaran->save();


        return redirect()->route('home.pelatihan');
    }

    public function profile()
    {
        $user = Auth::user();
        $pendaftaran = Pendaftaran::where('id_user','=',$user->id)->get();

        return view('homepage.profile',compact('user','pendaftaran'));
    }
}
