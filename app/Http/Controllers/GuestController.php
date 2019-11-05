<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() { return view('home.index'); }

    public function info() { return view('home.info'); }
}
