<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('admin.index')->with('success', 'Login successful.');
    }

    return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
}

public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect('/login')->with('success', 'Registration successful. Please login.');
}


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
