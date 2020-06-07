<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Role;
use Carbon\Carbon;
use DataTables;

class MenuController extends Controller
{
    public function index()
    {
        return view('menus.index');
    }

    public function data()
    {
        $menus = DataTables(Menu::all())->toJson();
        return $menus;
    }

    public function dataRoles($id)
    {
        $roles =  DataTables(Menu::find($id)->roles)->toJson();
        return $roles;
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'label' => 'required',
            'url' => 'required',
            'name' => 'required'
        ]);

        $menu = Menu::create([
            'kode' => $request->kode,
            'label' => $request->label,
            'url' => $request->url,
            'name' => $request->name
        ]);

        return 'Menu created';
    }

    public function edit(Request $request)
    {
        $menu = Menu::find($request->id);
        return view('menus.edit', compact('menu'));
    }

    public function attachView(Request $request)
    {
        $menu = Menu::find($request->id);
        $roles = Role::whereNotIn('id',$menu->roles()->pluck('role_id'))->get();
        return view('menus.attach', compact('menu','roles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'label' => 'required',
            'url' => 'required',
            'name' => 'required'
        ]);

        $menu = Menu::where('id',$id)->update([
            'kode' => $request->kode,
            'label' => $request->label,
            'url' => $request->url,
            'name' => $request->name
        ]);

        return 'menu updated';
    }

    public function delete(Request $request)
    {
        $menu = Menu::find($request->id);
        
        $menus = $menu->roles;
        $menus->each(function($item, $key) use($menu){
            $menu->roles()->detach($item->role_id);
        });      

        $menu->delete();


        return 'success deleted';
    }

    public function assignRole(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required'
        ]);

        $menu = Menu::find($request->id);
        $menu->roles()->attach($request->role_id);

        return 'Assign success';
    }

    public function unAssignRole(Request $request, $id)
    {
        $request->validate([
            'role_id' => 'required'
        ]);

        $menu = Menu::find($id);
        $menu->roles()->detach($request->role_id);

        return 'Assign success';
    }
}
