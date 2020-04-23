<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use App\Team;
use App\UserTeam;

class TeamController extends Controller
{
    public function index()
    {
        return view('teams.index');
    }

    public function data()
    {
        $teams = DataTables(Team::all())->toJson();
        return $teams;
    }

    public function create()
    {
        return view('teams.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $team = Team::create([
            'name' => $request->name
        ]);

        return 'Nama Tim berhasil dibuat';
    }

    public function edit(Request $request)
    {
        $team = Team::find($request->id);
        return view('teams.edit', compact('team'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $team = Team::where('id', $request->id)->update([
            'name' => $request->name
        ]);

        return 'Nama Tim berhasil dirubah';
    }

    public function asignUserToTeam(Request $request)
    {
        UserTeam::create([
            'user_id' => $request->user_id,
            'team_id' => $request->team_id
        ]);

        return 'Crated Success';
    }

    public function updateAsignToTeam(Request $request)
    {
        UserTeam::where('id', $request->id)->update([
            'user_id' => $request->user_id,
            'team_id' => $request->team_id
        ]);

        return 'Updated Success';
    }

}
