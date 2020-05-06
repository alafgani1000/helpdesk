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

        return 'data created';
    }

    public function edit(Request $request)
    {
        $menu = Menu::find($request->id);
        return view('menus.edit', compact('menu'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'label' => 'required',
            'url' => 'required',
            'name' => 'required'
        ]);

        $menu = Menu::where('id',$request->id)->update([
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
        $menu->delete();

        return 'success deleted';
    }

    public function assignRole(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'role_id' => 'required'
        ]);

        $menu = Menu::find($request->menu_id);
        $menu->roles->attach($request->role_id);

        return 'Assign success';
    }

    public function unAssignRole()
    {
        $request->validate([
            'user_id' => 'required',
            'role_id' => 'required'
        ]);

        $menu = Menu::find($request->menu_id);
        $menu->roles->detach($request->role_id);

        return 'Assign success';
    }
}
