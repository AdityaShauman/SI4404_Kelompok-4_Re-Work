<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LokerController extends Controller
{
    public function index()
    {
        $loker = Loker::all();
        return view('dashboard.loker.loker-index', compact('loker'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $dataAttr = [];
        $dataAttr['nama'] = $request->nama;
        $dataAttr['deskripsi'] = $request->deskripsi;
        $dataAttr['foto'] = $request->foto;
        $dataAttr['link'] = $request->link;

        $data = Loker::create($dataAttr);

        return response()->json(['success' => 'loker ditambahkan.', $data]);
    }

    public function show(loker $loker)
    {
        //
    }

    public function edit($id)
    {
        $loker = Loker::find($id);

        return view('dashboard.loker.loker-edit', compact('loker'));
    }

    public function update(Request $request, $id)
    {
        $loker = Loker::find($id);

        $loker->nama = $request->nama;
        $loker->deskripsi = $request->deskripsi;
        $loker->foto = $request->foto;
        $loker->link = $request->link;

        $loker->save();




        return redirect()->route('loker');
    }

    public function delete($id)
    {
        $loker = Loker::find($id);
        if (File::exists('Foto Loker/' . $loker->image)) {
            File::delete('Foto Loker/' . $loker->image);
        } else {
            File::delete('Foto Loker/' . $loker->image);
        };
        $loker->delete();
        return redirect()->route('loker');
    }
}
