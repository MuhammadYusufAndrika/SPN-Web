<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use App\Models\LayananCCTV;
use Illuminate\Http\Request;

class LayananCCTVController extends Controller
{
    public function index()
    {
        $sections = LayananCCTV::all();
        $carousels = Carousel::all();
        return view('cctvlayanan', compact('sections' , 'carousels'));
    }
}
