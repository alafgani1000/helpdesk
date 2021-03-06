<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as RequestApp;
use App\RequestAttachment;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function index()
    {
        return view('requests.index');
    }

    public function data()
    {
        $requests = DataTables(RequestApp::with(['stage','user'])->get())->toJson();
        return $requests;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'business_need' => 'required',
            'business_requirment' => 'required',
            'business_value' => 'required',
            'location' => 'required',
            'phone' => 'required'
        ]);

        $requestApp = RequestApp::create([
            'title' => $request->title,
            'business_need' => $request->business_need,
            'business_requirment' => $request->business_requirment,
            'business_value' => $request->business_value,
            'location' => $request->location,
            'phone' => $request->phone,
            'user_id' => Auth::user()->id,
            'stage_id' => 1
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
                $requestApp->requestAttachments()->save(
                    new RequestAttachment([
                        'file_name' => $filename, 
                        'file_location' => $item, 
                        'alias' => $name
                    ])
                );
            }
        }

        return 'Input success';

    }

    public function edit(Request $request)
    {
        $request = RequestApp::find($request->id);
        return view('requests.edit', compact('request'));
    }

    public function detail(Request $request)
    {
        $request = RequestApp::find($request->id);
        return view('requests.detail', compact('request'));
    }

    public function update()
    {
        $request->validate([
            'title' => 'required',
            'business_need' => 'required',
            'business_requirment' => 'required',
            'business_value' => 'required',
            'location' => 'required',
            'phone' => 'required'
        ]);

        $requestApp = RequestApp::where('id',$request->id)->update([
            'title' => $request->title,
            'business_need' => $request->business_need,
            'business_requirment' => $request->business_requirment,
            'busniness_value' => $request->business_value,
            'location' => $request->location,
            'phone' => $request->phone
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
                $requestApp->requestAttachments()->save(
                    new IncidentAttachment([
                        'file_name' => $filename, 
                        'file_location' => $item, 
                        'alias' => $name
                    ])
                );
            }
        }
    }

    public function delete(Request $request)
    {
        $requestApp = RequestApp::find($request->id)->delete();
        $reqAttachment = RequestAttachment::where('request_id',$request->id)->delete();

        return 'Delete Success';
    }

    public function deleteAttachment(Request $request)
    {
        $delAttachment = RequestAttachment::where('id',$request->id)->destroy();
        return 'Delete Success';
    }
}
