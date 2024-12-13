<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('siswa.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'nisn' => 'required|string|unique:siswa,nisn',
            'birthdate' => 'required|date',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')->with('success', 'Student created successfully.');
    }

    // Display the specified resource
    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    // Show the form for editing the specified resource
    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', compact('siswa'));
    }

    // Update the specified resource in storage
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'nisn' => 'required|string|unique:siswa,nisn,' . $siswa->id,
            'birthdate' => 'required|date',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')->with('success', 'Student updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Student deleted successfully.');
    }
}
