<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {

        $user = User::all();
        return view('dashboard.user.user-index',compact('user'));
    }

    public function store(Request $request)
    {
       $user = new User();

       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->role = $request->role;

       $user->save();

       return response()->json(['success' => 'User ditambahkan.', $user]);

    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('dashboard.user.user-edit',compact('user'));
    }

    public function update($id,Request $request)
    {
        $user = User::find($id);

       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);
       $user->role = $request->role;

       $user->save();
       return redirect()->route('user');
    }


    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user');
    }
}
