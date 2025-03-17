<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use League\OAuth1\Client\Server\Server;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'type' => 'required|max:255',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];

        $validated = $request->validate($rules);

        Service::create($validated);

        session()->flash('message', 'You created the record successfully');
        return redirect(route('services.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::where('id', $id)->first();
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::where('id', $id)->first();
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'type' => 'required|max:255',
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ];

        $validated = $request->validate($rules);

        $service = Service::find($id);

        $service->update($validated);

        session()->flash('message', 'You edited the record successfully');
        return redirect(route('services.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::where('id', $id)->delete();

        session()->flash('message', 'You deleted the record successfully');
        return redirect(route('services.index'));
    }
}
