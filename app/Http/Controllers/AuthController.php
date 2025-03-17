<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function store(Request $request) 
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($validate)) {
            return redirect(route('users.index'));
        }

        return back()->withErrors([
            "email" => "Couldn't find your Account",
        ]);
    }
}
