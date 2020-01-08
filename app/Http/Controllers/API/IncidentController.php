<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incident;
use App\Stage;
use App\User;

class IncidentController extends Controller
{
    public function data()
    {
        return Incident::with(['stage','user'])->get();
    }
}
