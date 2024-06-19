<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Description;
use Illuminate\Http\Request;

class DescriptionController extends Controller
{
    public function index()
    {
        $descriptions = Description::all();
        return view('admin.descriptions.index', compact('descriptions'));
    }

    public function create()
    {
        return view('admin.descriptions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Description::create($request->all());

        return redirect()->route('admin.descriptions.index')->with('success', 'Description created successfully.');
    }

    public function edit(Description $description)
    {
        return view('admin.descriptions.edit', compact('description'));
    }

    public function update(Request $request, Description $description)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $description->update($request->all());

        return redirect()->route('admin.descriptions.index')->with('success', 'Description updated successfully.');
    }

    public function destroy(Description $description)
    {
        $description->delete();
        return redirect()->route('admin.descriptions.index')->with('success', 'Description deleted successfully.');
    }
}