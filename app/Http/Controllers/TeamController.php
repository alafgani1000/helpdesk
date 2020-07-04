<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use App\Team;
use App\UserTeam;
use App\User;

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

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $team = Team::where('id', $id)->update([
            'name' => $request->name
        ]);

        return 'Nama Tim berhasil dirubah';
    }

    public function destroy(Request $request)
    {
        $team = Team::find($request->id);
        $team->delete();

        return 'Data berhasil dihapus';
    }

    public function asignUserToTeam(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'team_id' => 'required'
        ]);

        UserTeam::create([
            'user_id' => $request->user_id,
            'team_id' => $request->team_id
        ]);

        return 'Asign Success';
    }

    public function updateAsignToTeam(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'team_id' => 'required'
        ]);

        UserTeam::where('id', $request->id)->update([
            'user_id' => $request->user_id,
            'team_id' => $request->team_id
        ]);

        return 'Updated Success';
    }

    public function viewUserTeam()
    {
        $users = User::doesntHave('userTeam')->get();
        $teams = Team::all();

        return view('userteams.index', compact('users','teams'));
    }

    public function dataUserTeam()
    {
        $users = DataTables(User::with('userTeam','userTeam.team')->get())->toJson();
        return $users;
    }

}
