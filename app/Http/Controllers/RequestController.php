<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Request as RequestApp;

class RequestController extends Controller
{
    public function index()
    {
        return view('requests.index');
    }

    public function data()
    {
        
    }
}
