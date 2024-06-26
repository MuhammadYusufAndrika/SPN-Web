<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LayananInternet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananInternetController extends Controller
{
    // Menampilkan semua sections
    public function index()
    {
        $sections = LayananInternet::all();
        return view('admin.layananinternet.index', compact('sections'));
    }

    // Menampilkan form untuk membuat section baru
    public function create()
    {
        return view('admin.layananinternet.create');
    }

    // Menyimpan section baru ke database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|numeric',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        LayananInternet::create($validatedData);

        return redirect()->route('admin.layananinternet.index')->with('success', 'Section created successfully.');
    }

    // Menampilkan form untuk mengedit section
    public function edit(LayananInternet $layananinternet)
    {
        return view('admin.layananinternet.edit', compact('layananinternet'));
    }

    // Memperbarui section yang ada di database
    public function update(Request $request, LayananInternet $layananinternet)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'nullable|numeric',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            // Hapus gambar lama jika ada
            if ($layananinternet->image) {
                Storage::disk('public')->delete($layananinternet->image);
            }
            $validatedData['image'] = $imagePath;
        }

        $layananinternet->update($validatedData);

        return redirect()->route('admin.layananinternet.index')->with('success', 'Section updated successfully.');
    }

    // Menghapus section dari database
    public function destroy(LayananInternet $layananinternet)
    {
        if ($layananinternet->image) {
            Storage::disk('public')->delete($layananinternet->image);
        }
        $layananinternet->delete();
        return redirect()->route('admin.layananinternet.index')->with('success', 'Section deleted successfully.');
    }
}
