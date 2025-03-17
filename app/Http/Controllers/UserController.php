<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::get();
        // dd($users);

        $users = User::select('id', 'name', 'email', 'created_at', 'updated_at')->get();
        // dd($data);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'name' => 'required',
        //         'email' => 'required|email|unique:users',
        //         'password' => 'required|min:6|confirmed',
        //     ],
        // );

        // if($validator->fails()) {
        //     return redirect('/admin/users/create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();

        // $validated = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|min:6|confirmed',
        // ]);

        // $user = User::create([
        //     'name' => $validated['name'],
        //     'email' => $validated['email'],
        //     'password' => $validated['password'],
        // ]);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        session()->flash('message', 'You created record successfully.');
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::select('id', 'name', 'email', 'created_at', 'updated_at')->where('id', $id)->first();
        return view('admin.users.show', compact('data'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::select('id', 'name', 'email')->where('id', $id)->first();
        return view('admin.users.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
            ],
        );

        if($validator->fails()) {
            return redirect(route('users.edit', ['user' => $id]))
                    ->withErrors($validator)
                    ->withInput();
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->update();

        session()->flash('message', 'You updated the record successfully.');
        return redirect(route('users.index'));


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->delete();
        session()->flash('message', 'You deleted the record successfully.');
        return redirect(route('users.index'));
    }
}
