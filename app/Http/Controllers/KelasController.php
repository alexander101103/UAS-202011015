<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('kelas.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {

        $request->validate([
            'class_name' => 'required|string|max:100',
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Class created successfully.');
    }

    // Display the specified resource
    public function show(Kelas $kelas)
    {
        return view('kelas.show', compact('kelas'));
    }

    // Show the form for editing the specified resource
    public function edit($kela)
    {
        $kelas = Kelas::findOrFail($kela);
        return view('kelas.edit', compact('kelas'));
    }



    // Update the specified resource in storage
    public function update(Request $request, Kelas $kelas)
    {

        $request->validate([
            'class_name' => 'required|string|max:100',
        ]);

        $kelas->update([
            'class_name' => $request->class_name,
        ]);

        return redirect()->route('kelas.index')->with('success', 'Class updated successfully!');
    }


    // Remove the specified resource from storage
    public function destroy(Kelas $kelas)
    {
        
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Class deleted successfully!');
    }
}
