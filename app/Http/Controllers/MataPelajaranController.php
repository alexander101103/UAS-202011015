<?php

namespace App\Http\Controllers;

use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mataPelajaran = MataPelajaran::all();  // Fetch all subjects
        return view('mata_pelajaran.index', compact('mataPelajaran'));  // Pass to index view
    }

    public function show(MataPelajaran $mataPelajaran)
    {
        return view('mata_pelajaran.show', compact('mataPelajaran'));  // Pass to show view
    }

    public function create()
    {
        return view('mata_pelajaran.create');  // Return the create view
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject_name' => 'required|string|max:100',
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('mata-pelajaran.index')->with('success', 'Subject created successfully.');
    }

    public function edit(MataPelajaran $mataPelajaran)
    {
        return view('mata_pelajaran.edit', compact('mataPelajaran'));  // Pass to edit view
    }

    public function update(Request $request, MataPelajaran $mataPelajaran)
    {
        $request->validate([
            'subject_name' => 'required|string|max:100',
        ]);

        $mataPelajaran->update($request->all());

        return redirect()->route('mata-pelajaran.index')->with('success', 'Subject updated successfully.');
    }

    public function destroy(MataPelajaran $mataPelajaran)
    {
        $mataPelajaran->delete();

        return redirect()->route('mata-pelajaran.index')->with('success', 'Subject deleted successfully.');
    }
}
