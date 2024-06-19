<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Http\Requests\StorepengaduanRequest;
use App\Http\Requests\UpdatepengaduanRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function edit(pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepengaduanRequest $request, pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengaduan $pengaduan)
    {
        //
    }
}
