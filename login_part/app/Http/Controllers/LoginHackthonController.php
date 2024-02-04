<?php

namespace App\Http\Controllers;

use App\Models\LoginHackthon;
use Illuminate\Http\Request;

class LoginHackthonController extends Controller
{
    public function show(){
        $logins = LoginHackthon::all();
        return view('welcome',compact('logins'));
    }

    public function create(){
        return view('createLogin');
}

    public function store(Request $request){
        LoginHackthon::create([
            'nama_team' => $request->nama_team,
            'password' => $request->password
        ]);

        return redirect(route('show'));
}
}
