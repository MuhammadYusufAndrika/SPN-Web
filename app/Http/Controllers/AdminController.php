<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Models\Description;
use App\Models\Service;

class AdminController extends Controller
{
    public function index()
    {
        // Menghitung jumlah masing-masing model
        $carouselCount = Carousel::count();
        $descriptionCount = Description::count();
        $serviceCount = Service::count();

        // Mengirim data ke view
        return view('admin.dashboard.dashboard', compact('carouselCount', 'descriptionCount', 'serviceCount'));
    }
}
