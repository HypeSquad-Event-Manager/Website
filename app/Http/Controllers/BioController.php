<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_Bios;
use Illuminate\Support\Facades\Auth;

class BioController extends Controller
{
    public function edit() { return view('bio.edit')->with('userid', Auth::user()->userid); }

    public function postBio (Request $request) {
        $validatedData = $request->validate([
            'sexuality' => 'required',
            'dob' => 'required',
            'description' => 'required',
            'gender' => 'required',
            'status' => 'required',
            'email' => 'required',
            'occupation' => 'required'
        ]);

        $gl = User_Bios::updateOrCreate([
            'userid'   => Auth::user()->userid,
        ],[
            'username' => Auth::user()->username,
            'discrim' => Auth::user()->discrim,
            'avatar' => Auth::user()->avatar,
            'slug' => $request->slug,
            'sexuality' => $request->sexuality,
            'dob' => $request->dob,
            'description' => $request->description,
            'gender' => $request->gender,
            'status' => $request->status,
            'email' => $request->email,
            'occupation' => $request->occupation
            ]);
            return redirect("/");
    }
}
