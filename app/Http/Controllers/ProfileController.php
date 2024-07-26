<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfileForm()
    {
        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Kirim data pengguna ke tampilan
        return view('profile', compact('user'));
    }
}
