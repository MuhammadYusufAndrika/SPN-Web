<?php

namespace App\Http\Controllers;
use App\Models\Carousel;
use App\Models\Description;
use App\Models\Service;

class IndexController extends Controller
{
    public function index()
    {
        // Mengambil data untuk title (baris pertama)
        $firstDescription = Description::first();
        $carousels = Carousel::all();
        $services = Service::all();

        return view('index', compact('firstDescription' , 'carousels' , 'services'));
    }
}