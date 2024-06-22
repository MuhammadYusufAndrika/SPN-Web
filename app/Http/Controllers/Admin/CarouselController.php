<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarouselController extends Controller
{
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin.carousels.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin.carousels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        // Menyimpan file gambar ke dalam folder 'public/storage/carousels'
        $imagePath = $request->file('image')->store('carousels', 'public');

        // Menyimpan data ke dalam database
        Carousel::create([
            'image' => $imagePath,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        return redirect()->route('admin.carousels.index')->with('success', 'Carousel item created successfully');
    }

    public function edit(Carousel $carousel)
    {
        return view('admin.carousels.edit', compact('carousel'));
    }

    public function update(Request $request, Carousel $carousel)
    {
        $request->validate([
            'image' => 'image',
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
        ]);

        // Jika ada file gambar baru, kita harus mengupdate jalur file gambar di database
        if ($request->hasFile('image')) {
            // Menyimpan file gambar baru ke dalam folder 'public/storage/carousels'
            $imagePath = $request->file('image')->store('carousels', 'public');
            $carousel->update([
                'image' => $imagePath,
            ]);
        }

        // Mengupdate data lainnya
        $carousel->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        return redirect()->route('admin.carousels.index')->with('success', 'Carousel item updated successfully.');
    }

    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        return redirect()->route('admin.carousels.index')->with('success', 'Carousel item deleted successfully.');
    }
}
