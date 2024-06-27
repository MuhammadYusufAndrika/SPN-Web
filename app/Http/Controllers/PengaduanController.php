<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Http\Requests\UpdatepengaduanRequest;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduans = pengaduan::all();
        return view('admin.contact.index', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'deskripsi_keluhan' => 'required|string',
        ]);

        $request['tanggal_pengaduan'] = Carbon::now();

        pengaduan::create($request->all());

        // dd(pengaduan::all());
        return redirect()->route('contact')->with('success', 'Service created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('admin.contact.edit', compact('pengaduan'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'deskripsi_keluhan' => 'required|string',
        ]);

        $pengaduan = Pengaduan::find($id);

        $pengaduan->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
                'deskripsi_keluhan' => $request->deskripsi_keluhan,
        ]);

        // dd(pengaduan::all());
        return redirect()->route('admin.contact.index')->with('success', 'Service created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id)->delete();
        return redirect()->route('admin.contact.index')->with('success', 'Service deleted successfully.');
    }
}
