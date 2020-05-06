<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permision;
use Carbon\Carbon;
use DataTables;

class PermissionController extends Controller
{
    public function index()
    {
        return view('permisions.index');
    }

    public function data()
    {
        return DataTables(Permision::all())->toJson();
    }

    public function store(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required'
        ]);

        $permision = Permision::create([
            'role_id' => $request->role_id,
            'name' => $request->name
        ]);

        return "Success";
    }

    public function edit(Request $request)
    {
        $perm = Permision::find($request->id);
        return view('permisions.edit', compact('perm'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'role_id' => 'required',
            'name' => 'required'
        ]);

        $permision = Permision::where('id',$request->id)->update([
            'role_id' => $request->role_id,
            'name' => $request->name
        ]);

        return "Success";
    }
}
