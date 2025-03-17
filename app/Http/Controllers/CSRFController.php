<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSRFController extends Controller
{
    public function lecture()
    {
        return view('admin.csrf.lecture');
    }

    public function getInfo(Request $request)
    {
        $name = $request['name'];
        $age = $request['age'];

        dd($name, $age);
        // return view('admin.csrf.lecture');
    }

    public function ajax() 
    {
        return view('admin.csrf.ajax');
    }

    public function getItems()
    {
        // $data = ['Mobile Phone', 'Computer', 'Camera'];
        $arrayNumber = rand(1, 20);
        $data = [];

        for ($i=1; $i < $arrayNumber; $i++) { 
            array_push($data, 'Item' . $i);
        }
        return response()->json($data, 200);
    }
}
