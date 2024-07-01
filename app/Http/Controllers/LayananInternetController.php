<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\LayananInternet;
use Illuminate\Http\Request;

class LayananInternetController extends Controller
{
    public function index()
    {
        $sections = LayananInternet::all();
        $carousels = Carousel::all();
        return view('internetlayanan', compact('sections' , 'carousels'));
    }
}
