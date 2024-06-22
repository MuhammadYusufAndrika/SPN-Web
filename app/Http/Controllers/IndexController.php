<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\CarouselController;
use App\Models\Carousel;
use App\Models\Description;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Mengambil data untuk title (baris pertama)
        $firstDescription = Description::first();
        $carousels = Carousel::all();

        return view('index', compact('firstDescription' , 'carousels'));
        // Mengambil data untuk description (baris kedua)
        // $description = Description::skip(1)->first();

        // Mengirimkan kedua variabel ke view
        // return view('index', compact('descriptions', 'description'));
    }
}