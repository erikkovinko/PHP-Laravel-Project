<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View; 
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        // Authentication successful, retrieve the authenticated user
        $user = Auth::user();

        // Redirect to the user's profile page with their ID as a parameter
        return redirect()->route('user.profile', ['id' => $user->id]);
    } else {
        // Authentication failed, redirect back with errors
        return redirect()->back()->withInput()->withErrors(['loginError' => 'Invalid email or password']);
    }
}

    public function showRegistrationForm()
    {
        return view('auth.signup');
    }

    public function signup(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        
       
        
        return redirect()->route('user.profile', ['id' => $user->id]);
    }
}
