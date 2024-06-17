<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

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

        $imagePath = $request->file('image')->store('carousels', 'public');

        Carousel::create([
            'image' => $imagePath,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        return redirect()->route('admin.carousels.index')->with('success', 'Carousel item created successfully.');
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

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('carousels', 'public');
            $carousel->update([
                'image' => $imagePath,
            ]);
        }

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

