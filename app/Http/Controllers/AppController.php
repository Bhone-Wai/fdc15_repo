<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Service;

class AppController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        $services = Service::all();
        return view('app.index', compact('portfolios', 'services'));
    }
}
