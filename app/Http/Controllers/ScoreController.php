<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Siswa;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    // Display a listing of the scores
    public function index()
    {
        $scores = Score::with(['siswa', 'mataPelajaran'])->get();
        return view('scores.index', compact('scores'));
    }

    // Show the form for creating a new score
    public function create()
    {
        $students = Siswa::all();
        $subjects = MataPelajaran::all();
        return view('scores.create', compact('students', 'subjects'));
    }

    // Store a newly created score in the database
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'score' => 'required|integer|between:0,100',
        ]);

        // Create a new score record
        Score::create($request->all());

        return redirect()->route('scores.index')->with('success', 'Score assigned successfully.');
    }

    // Show the form for editing the specified score
    public function edit(Score $score)
    {
        $students = Siswa::all();
        $subjects = MataPelajaran::all();
        return view('scores.edit', compact('score', 'students', 'subjects'));
    }

    // Update the specified score in the database
    public function update(Request $request, Score $score)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
            'score' => 'required|integer|between:0,100',
        ]);

        // Update the score record
        $score->update($request->all());

        return redirect()->route('scores.index')->with('success', 'Score updated successfully.');
    }

    // Remove the specified score from the database
    public function destroy(Score $score)
    {
        $score->delete();

        return redirect()->route('scores.index')->with('success', 'Score deleted successfully.');
    }
}
