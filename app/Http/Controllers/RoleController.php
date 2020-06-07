<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
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
        $roles = DataTables(Role::all())->toJson();
        return $roles;
    }

    public function dataRoles($id)
    {
        $roles =  DataTables(User::find($id)->roles)->toJson();
        return $roles;
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

    public function update(Request $request, $id)
    {
        $role = Role::where('id',$id)->update([
            'name' => $request->name
        ]);

        return 'Success';
    }

    public function destroy(Request $request)
    {
        $role = Role::find($request->id);
        $role->delete();

        return 'Success';
    }

    public function viewAssignRole(Request $request)
    {
        $user = User::find($request->id);

        $roles = Role::whereNotIn('id', $user->roles()->pluck('role_id'))->get();
        return view('users.attach', compact('user', 'roles'));
    }

    public function assignRole(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required'
        ]);

        $user = User::find($id);
        $user->roles()->attach($request->role_id);

        return 'Assign success';
    }

    public function unAsignRole(Request $request,$id)
    {
        $request->validate([
            'role_id' => 'required'
        ]);

        $user = User::find($id);
        $user->roles()->detach($request->role_id);
        
        return 'Un Assign Success';
    }

}
