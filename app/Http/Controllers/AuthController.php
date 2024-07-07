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
        return view('auth.login'); // Ensure 'resources/views/auth/login.blade.php' exists
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
    
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Mendapatkan informasi pengguna
            $user = Auth::user();

            // Cek tipe pengguna dan arahkan ke halaman yang sesuai
            if ($user->usertype == 'admin') {
                return redirect('/admin');
            }
    
            // Arahkan pengguna biasa ke profil
            return redirect()->intended('/profile');
        }

        // Login gagal, kembali ke halaman login dengan pesan kesalahan
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    // Handle user registration
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password'
        ]);

        $data = $request->except('confirm-password');
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