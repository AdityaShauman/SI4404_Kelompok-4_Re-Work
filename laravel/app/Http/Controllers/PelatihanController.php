<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function index()
    {
        $pelatihan = Pelatihan::all();
        return view('dashboard.pelatihan.pelatihan-index',compact('pelatihan'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data =  Pelatihan::create($request->all());


        return response()->json(['success' => 'pelatihan ditambahkan.',$data]);
    }

    public function show(pelatihan $pelatihan)
    {
        //
    }

    public function edit($id)
    {
        $pelatihan = Pelatihan::find($id);

        return view('dashboard.pelatihan.pelatihan-edit',compact('pelatihan'));
    }

    public function update(Request $request,$id)
    {
        $pelatihan = Pelatihan::find($id);
        $pelatihan->update($request->all());

        return redirect()->route('pelatihan');
    }

    public function delete($id)
    {
        $pelatihan = Pelatihan::find($id);
        $pelatihan->delete();
        return redirect()->route('pelatihan');
    }
}
