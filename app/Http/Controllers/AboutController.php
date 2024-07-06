<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage  ;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'description' => 'required|string|max:255',
        ]);

        // Menyimpan file gambar ke dalam folder 'public/storage/carousels'
        $imagePath = $request->file('image')->store('carousels', 'public');

        // Menyimpan data ke dalam database
        About::create([
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'Abouts item created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::find($id);
        return view('admin.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::find($id);

        $request->validate([
            'image' => 'image',
            'description' => 'required|string|max:255',
        ]);

        // Jika ada file gambar baru, kita harus mengupdate jalur file gambar di database
        if ($request->hasFile('image')) {
            // Menyimpan file gambar baru ke dalam folder 'public/storage/carousels'
            $imagePath = $request->file('image')->store('carousels', 'public');
            $about->update([
                'image' => $imagePath,
            ]);
        }

        // Mengupdate data lainnya
        $about->update([
            'description' => $request->description,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'About item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::find($id);
        // Hapus file gambar dari penyimpanan
        if (Storage::disk('public')->exists($about->image)) {
            Storage::disk('public')->delete($about->image);
        }
    
        // Hapus entri dari database
        $about->delete();
    
        return redirect()->route('admin.about.index')->with('success', 'Carousel item deleted successfully.');
    }
}


