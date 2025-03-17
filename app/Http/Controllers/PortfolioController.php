<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Auth\Events\Validated;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::with([
            'createdBy' => function ($query) {
                $query->select('id', 'name', 'email');
            },
            'updatedBy' => function ($query) {
                $query->select('id', 'name', 'email');
            }
        ])->get();

        return view('admin.portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('admin.portfolio.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif',
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $imagePath = $request->file('image')->store('portfolios', 'public');

        $portfolio = Portfolio::create([
            'image' => $imagePath,
            'title' => $validated['title'],
            'description' => $validated['description'],
            'created_by' => auth()->user()->id,
            'created_at' => Carbon::now(),
        ]);

        session()->flash('message', 'You created record successfully.');
        return redirect(route('portfolios.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $portfolio = Portfolio::with([
            'createdBy' => function ($query) {
                $query->select('id', 'name', 'email');
            },
            'updatedBy' => function ($query) {
                $query->select('id', 'name', 'email');
            }
        ])->where('id', $id)->first();
        // $portfolio = Portfolio::with('user')->where('id', $id)->first();
        return view('admin.portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $portfolio = Portfolio::select('id', 'image', 'title', 'description')->where('id', $id)->first();
        return view('admin.portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $hasFile = $request->hasFile('image');

        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
        ];

        if ($hasFile) {
            $rules['image'] = 'required|mimes:jpg,png,jepg';
        }
        
        $validated = $request->validate($rules);

        if($hasFile) {
            Storage::disk('public')->delete($portfolio->image);
            $imagePath = $request->file('image')->store('portfolios', 'public');
            $portfolio->image = $imagePath;
        }


        $portfolio->title = $validated['title'];
        $portfolio->description = $validated['description'];
        $portfolio->updated_by = auth()->user()->id;
        $portfolio->save();

        session()->flash('message', 'You edited record successfully.');
        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        // Storage::delete('public/' , $portfolio->image);
        Storage::disk('public')->delete($portfolio->image);
        Portfolio::where('id', $portfolio->id)->delete();

        session()->flash('message', 'You deleted the record successfully');
        return redirect(route('portfolios.index'));
    }
}
