<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }

    public function data()
    {
        $categories = DataTables(Category::all())->toJson();
        return $categories;
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'time_interval' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $category = Category::create([
            'name' => $request->name,
            'time_interval' => $request->time_interval,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return 'Kategori berhasil dibuat';
    }

    public function edit(Request $request)
    {
        $category = Category::find($request->id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'time_interval' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        $category = Category::where('id', $request->id)->update([
            'name' => $request->name,
            'time_interval' => $request->time_interval,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);

        return 'Kategori berhasil diupdate';
    }
}
