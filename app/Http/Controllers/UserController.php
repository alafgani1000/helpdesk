<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DataTables;
use App\User;


class UserController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function data()
    {
        $users = DataTables(User::all())->toJson();
        return $users;
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'repassword' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return 'User berhasil dibuat';
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'repassword' => 'required'
        ]);

        $user = User::where('id',$request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return 'User berhasil diubah';
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();

        return 'User berhasil dihapus';
    }
}
