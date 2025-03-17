<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession()
    {
        return view('admin.session.get-session');
    }

    public function postSession(Request $request)
    {
        $name = $request['name'];
        $age = $request['age'];
        $address = $request['address'];

        session()->put('name', $name);
        session()->put('age', $age);
        session()->put('address', $address);

        return redirect(route('admin.getSession'));
    }

    public function deleteSession($key)
    {
        session()->forget($key);

        return redirect(route('admin.getSession'));
    }

    public function flushSession()
    {
        session()->flush();

        return redirect(route('admin.getSession'));
    }
}
