<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LayananCCTV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananCCTVController extends Controller
{
    // Menampilkan semua sections
    public function index()
    {
        $sections = LayananCCTV::all();
        return view('admin.layanancctv.index', compact('sections'));
    }

    // Menampilkan form untuk membuat section baru
    public function create()
    {
        return view('admin.layanancctv.create');
    }

    // Menyimpan section baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        LayananCCTV::create($validatedData);

        return redirect()->route('admin.layanancctv.index')->with('success', 'Section created successfully.');
    }

    // Menampilkan form untuk mengedit section
    public function edit(LayananCCTV $layanancctv)
    {
        return view('admin.layanancctv.edit', compact('layanancctv'));
    }

    // Memperbarui section yang ada di database
    public function update(Request $request, LayananCCTV $layanancctv)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            // Hapus gambar lama jika ada
            if ($layanancctv->image) {
                Storage::disk('public')->delete($layanancctv->image);
            }
            $validatedData['image'] = $imagePath;
        }

        $layanancctv->update($validatedData);

        return redirect()->route('admin.layanancctv.index')->with('success', 'Section updated successfully.');
    }

    // Menghapus section dari database
    public function destroy(LayananCCTV $layanancctv)
    {
        if ($layanancctv->image) {
            Storage::disk('public')->delete($layanancctv->image);
        }
        $layanancctv->delete();
        return redirect()->route('admin.layanancctv.index')->with('success', 'Section deleted successfully.');
    }
}
