<?php

namespace App\Http\Controllers;

use App\Models\LayananKomputer;
use Illuminate\Http\Request;

class LayananInternetController extends Controller
{
    public function index()
    {
        $sections = LayananKomputer::all();
        return view('komputerlayanan', compact('sections'));
    }
}
