<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class AdminAuthController extends Controller
{
    public function login(Request $request) 
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
        );

        if($validator->fails()) {
            return redirect('/admin')
                ->withErrors($validator);
        }

        $credential = $request->only('email', 'password');

        if(Auth::attempt($credential)) {
            return redirect(route('users.index'));
        } 

        else {
            $validator->errors()->add('password', 'Your credential is not valid');
            return redirect('/admin')
                ->withErrors($validator);
        }
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->with(['prompt' => 'select_account'])->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        
        $user = User::updateOrCreate([
            'email' => $googleUser->getEmail(),
        ],[
            'name' => $googleUser->getName(),
            'google_id' => $googleUser->getId(),
            'password' => bcrypt(uniqid()),
        ]);

        Auth::login($user);

        return redirect(route('users.index'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
