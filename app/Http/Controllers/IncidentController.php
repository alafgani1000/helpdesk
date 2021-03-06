<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Incident;
use App\IncidentAttachment;
use App\Team;
use App\Category;
use App\Stage;
use App\User;
use App\UserTeam;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DataTables;

class IncidentController extends Controller
{
    public function index()
    {
        return view('incidents.index');
    }

    public function data()
    {
        $incident = DataTables(Incident::with(['stage','user','team'])->get())->toJson();
        return $incident;
    }

    public function store(Request $request)
    {
        $request->validate([
            'incident' => 'required',
            'location' => 'required',
            'phone' => 'required|numeric'
        ]);

        $incident = Incident::create([
            'text' => $request->incident,
            'location' => $request->location,
            'phone' => $request->phone,
            'user_id' => Auth::user()->id,
            'stage_id' => Stage::open()->first()->id
        ]);

        // insert incedent data attachment 
        if(!empty($request->file('files')))
        {
            foreach($request->file('files') as $files)
            {
                $dateNow    = Carbon::now()->toDateTimeString();
                $date       = Carbon::parse($dateNow)->format('dmYHis');
                $name       = $files->getClientOriginalName();
                $username   = Auth::user()->id;
                $filename   = $date.$username.$name;
                // upload data
                $item = $files->storeAs('files', $filename);
                // input data file
                $incident->incidentAttachments()->save(
                    new IncidentAttachment([
                        'file_name' => $filename, 
                        'file_location' => $item, 
                        'alias' => $name
                    ])
                );
            }
        }

        return "Incident berhasil diinput.";
        
    }

    public function edit(Request $request)
    {
        $incident = Incident::find($request->id);
        return view('incidents.edit',compact('incident'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'incident' => 'required',
            'location' => 'required',
            'phone' => 'required|numeric'
        ]);

        $incident = Incident::where('id',$request->id)->update([
            'text' => $request->incident,
            'location' => $request->location,
            'phone' => $request->phone,
            'user_id' => Auth::user()->id,
        ]);

        // insert incedent data attachment 
        if(!empty($request->file('files')))
        {
            foreach($request->file('files') as $files)
            {
                $dateNow    = Carbon::now()->toDateTimeString();
                $date       = Carbon::parse($dateNow)->format('dmYHis');
                $name       = $files->getClientOriginalName();
                $username   = Auth::user()->id;
                $filename   = $date.$username.$name;
                // upload data
                $item = $files->storeAs('files', $filename);
                // input data file
                $incident->incidentAttachments()->save(
                    new IncidentAttachment([
                        'file_name' => $filename, 
                        'file_location' => $item, 
                        'alias' => $name
                    ])
                );
            }
        }

        return "Incident berhasil update.";
    }

    public function deleteAttachment(Request $request)
    {
        $incidenAttachment = IncidentAttachment::where('id', $request->id)->delete();

        return "Incident berhasil dihapus.";
    }

    public function delete(Request $request)
    {
        $incident = Incident::find($request->id);
        $incident->delete();

        $incidenAttachment = IncidentAttachment::where('incident_id', $request->id)->delete();

        return "Incident berhasil dihapus.";
    }

    public function viewResolve(Request $request)
    {
        $incident = Incident::find($request->id);
        $users = UserTeam::where('id', $incident->team_id)->get();
        return view('incidents.resolve', compact('incident'));
    }

    public function resolve(Request $request)
    {
        $request->validate([
            'resolve_text' => 'required',
        ]);

        Incident::where('id',$request->id_incident)->update([
            'resolve_text' => $request->resolve_text,
            'resolve_date' => Carbon::now(),
            'stage_id' => Stage::close()->first()->id
        ]);

        return "Resolve Success";
    }

    public function reservasi(Request $request, $id)
    {
        $incident = Incident::find($request->id);
        $teams = Team::all();
        $categories = Category::all();
        return view('incidents.reservasi',compact('incident', 'teams', 'categories'));
    }

    public function reservasi_store(Request $request, $id)
    {
        $request->validate([
            'team' => 'required',
            'category' => 'required'
        ]);

        $act = Incident::where('id', $id)->update([
            'team_id' => $request->team,
            'category_id' => $request->category,
            'ticket_time' => Carbon::now(),
            'ticket' => sprintf('%08d', $id)
        ]);

        return "Tiket berhasil dibuat";
    }
}
