<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{

    public function index()
    {
        $materi = Materi::all();
        return view('dashboard.materi.materi-index',compact('materi'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data =  Materi::create($request->all());


        return response()->json(['success' => 'Materi ditambahkan.',$data]);
    }

    public function show(Materi $materi)
    {
        //
    }

    public function edit($id)
    {
        $materi = Materi::find($id);

        return view('dashboard.materi.materi-edit',compact('materi'));
    }

    public function update(Request $request,$id)
    {
        $materi = Materi::find($id);
        $materi->update($request->all());

        return redirect()->route('materi');
    }

    public function delete($id)
    {
        $materi = Materi::find($id);
        $materi->delete();
        return redirect()->route('materi');
    }
}
