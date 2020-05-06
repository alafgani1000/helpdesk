<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stage;
use Carbon\Carbon;
use DataTables;

class StageController extends Controller
{
    public function index()
    {
        return view('stages.index');
    }

    public function data()
    {
        return DataTables(Stage::all())->toJson();
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'description' => 'required'
        ]);

        $stage = Stage::create([
            'text' => $request->text,
            'description' => $request->description
        ]);

        return 'Success';
    }

    public function edit(Request $request)
    {
        $stage = Stage::find($request->id);
        return view('stages.edit', compact('stage'));
    }

    public function update(Request $request)
    {
        
        $request->validate([
            'text' => 'required',
            'description' => 'required'
        ]);

        $stage = Stage::where('id',$request->id)->update([
            'text' => $request->text,
            'description' => $request->description
        ]);

        return 'Success';
    }

    public function delete(Request $request)
    {
        $stage = Stage::find($request->id);
        $stage->delete();

        return 'Success';
    }
}
