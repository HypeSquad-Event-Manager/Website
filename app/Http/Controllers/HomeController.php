<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events;
use app\User_events;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() { return view('home'); }

    public function dashboard() { return view('user.dashboard'); }

    public function event() { return view('organize.event'); }

    public function map() { return view('map.index'); }

    public function success() { return view('status.success'); }

    public function error() { return view('status.error'); }

    public function profile() { return view('user.profile.index'); }

    public function rsvp() { return view('user.rsvp.index'); }

    public function postrsvp (Request $request) {
        $validatedData = $request->validate([
            'title' => 'max:180|nullable',
            'date' => 'required',
            'lat' => 'nullable',
            'lon' => 'nullable',
            'address' => 'nullable',
            'rsvp' => 'nullable'
        ]);

        $gl = User_events::create([
            'title' => $request->title,
            'date' => $request->date,
            'lat' => $request->lat,
            'lon' => $request->lon,
            'address' => $request->address,
            'rsvp' => $request->rsvp
        ]);
    }

    public function postevent (Request $request) {
        $validatedData = $request->validate([
            'title' => 'max:180|nullable',
            'date' => 'required',
            'lat' => 'nullable',
            'lon' => 'nullable',
            'address' => 'nullable',
        ]);

        $gl = Events::create([
            'title' => $request->title,
            'date' => $request->date,
            'lat' => $request->lat,
            'lon' => $request->lon,
            'address' => $request->address,
        ]);
        return redirect("/success");
    }


}
