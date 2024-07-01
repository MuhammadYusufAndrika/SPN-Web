<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Show the login form
    public function login()
    {
        return view('auth.login'); // Ensure 'resources/views/login.blade.php' exists
    }

    // Show the registration form
    public function register()
    {
        return view('auth.register'); // Ensure 'resources/views/auth/register.blade.php' exists
    }

    // Handle login request
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
                return redirect()->intended('/profile'); // Redirect to the profile page
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        } else {
            return back()->withErrors([
                'email' => 'User does not exist.',
            ]);
        }
    }


    // Handle user registration
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
        ]);
        $data = $request->except('confirm-password', 'password');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect('/login');
    }

    // Handle logout request
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}