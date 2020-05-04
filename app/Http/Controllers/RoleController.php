<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\Auth;


class RoleController extends Controller
{
    public function index()
    {
        return view('roles.index');
    }

    public function data()
    {
        $roles = DatatTables(Role::all())->toJson();
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

        return 'Success';
    }

    public function edit(Request $request)
    {
        $role = Role::find($request->id);
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request)
    {
        $role = Role::where('id',$request->id)->update([
            'name' => $request->name
        ]);

        return 'Success';
    }

    public function delete(Request $request)
    {
        $role = Role::find($request->id);
        $role->delete();

        return 'Success';
    }

    public function assignRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'role_id' => 'required'
        ]);

        $user = User::find($request->user_id);
        $user->roles->attach($request->role_id);

        return 'Assign success';
    }

    public function unAsignRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'user_role' => 'required'
        ]);

        $user = User::find($request->user_id);
        $user->roles->dettach($request->role_id);
        
        return 'Un Assign Success';
    }

}
