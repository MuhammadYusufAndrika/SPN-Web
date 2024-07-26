<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function showProfileForm()
    {
        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Kirim data pengguna ke tampilan
        return view('profile', compact('user'));
    }

    public function updateProfil(Request $request){
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'email' => 'email'
        ]);

        // Get the currently authenticated user
        $user = Auth::user();
        $hashpass = Hash::make($validatedData['password']);


        // Update the user's name using Eloquent's update method
        $user->update([
            'password' => $hashpass,
            'name' => $validatedData['name'],
            'email' => $validatedData['email']
        ]);

        // Optionally, redirect or return a response
        return redirect()->back()->with('success', 'updated successfully!');
    }

}
