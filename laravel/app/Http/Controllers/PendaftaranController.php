<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::with('User','Pelatihan')->get();

        return view('dashboard.pendaftaran.pendaftaran-index',compact('pendaftaran'));
    }

    public function terima($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->status = 'Dikonfirmasi';
        $pendaftaran->save();

        return redirect()->route('pendaftaran');
    }
}
