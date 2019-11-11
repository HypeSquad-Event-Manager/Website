<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Events;

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

    public function postevent (Request $request) {
        $validatedData = $request->validate([
            'title' => 'max:180|nullable',
            'date' => 'required',
            'location' => 'nullable',
        ]);

        $gl = Events::create([
            'title' => $request->title,
            'date' => $request->date,
            'location' => $request->location,
        ]);
        return redirect("/");
    }

}
