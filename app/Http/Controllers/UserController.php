<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function signin()
    {
        return view('user.signin');
    }

    public function signup()
    {
        return view('user.signup');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended('/tasks/upcoming')->with('success', 'You are now logged in!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect('/users/signin')->with('success', 'Account created successfully! Please sign in.');
    }
}
