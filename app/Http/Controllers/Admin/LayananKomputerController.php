<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LayananKomputer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananKomputerController extends Controller
{
    // Menampilkan semua sections
    public function index()
    {
        $sections = LayananKomputer::all();
        return view('admin.layanankomputer.index', compact('sections'));
    }

    // Menampilkan form untuk membuat section baru
    public function create()
    {
        return view('admin.layanankomputer.create');
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

        LayananKomputer::create($validatedData);

        return redirect()->route('admin.layanankomputer.index')->with('success', 'Section created successfully.');
    }

    // Menampilkan form untuk mengedit section
    public function edit(LayananKomputer $layanankomputer)
    {
        return view('admin.layanankomputer.edit', compact('layanankomputer'));
    }

    // Memperbarui section yang ada di database
    public function update(Request $request, LayananKomputer $layanankomputer)
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
            if ($layanankomputer->image) {
                Storage::disk('public')->delete($layanankomputer->image);
            }
            $validatedData['image'] = $imagePath;
        }

        $layanankomputer->update($validatedData);

        return redirect()->route('admin.layanankomputer.index')->with('success', 'Section updated successfully.');
    }

    // Menghapus section dari database
    public function destroy(LayananKomputer $layanankomputer)
    {
        if ($layanankomputer->image) {
            Storage::disk('public')->delete($layanankomputer->image);
        }
        $layanankomputer->delete();
        return redirect()->route('admin.layanankomputer.index')->with('success', 'Section deleted successfully.');
    }
}
