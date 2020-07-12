<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function events() { return view('user.dashboard'); }

    public function view($eventID) { return view('events.event')->with('eventID',$eventID); }
}
