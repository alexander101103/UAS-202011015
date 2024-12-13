<?php

namespace App\Http\Controllers;

use App\Models\StudentSubject;
use App\Models\Siswa;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class StudentSubjectController extends Controller
{
    public function index()
    {
        $studentSubjects = StudentSubject::with(['siswa', 'mataPelajaran'])->get();
        return view('student_subject.index', compact('studentSubjects'));
    }

    public function show(StudentSubject $studentSubject)
    {
        return view('student_subject.show', compact('studentSubject'));
    }

    public function create()
    {
        $students = Siswa::all();
        $subjects = MataPelajaran::all();
        return view('student_subject.create', compact('students', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
        ]);

        StudentSubject::create($request->all());

        return redirect()->route('studentSubjects.index')->with('success', 'Subject assigned to student successfully!');
    }

    public function edit(StudentSubject $studentSubject)
    {
        $students = Siswa::all();
        $subjects = MataPelajaran::all();
        return view('student_subject.edit', compact('studentSubject', 'students', 'subjects'));
    }

    public function update(Request $request, StudentSubject $studentSubject)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'mata_pelajaran_id' => 'required|exists:mata_pelajaran,id',
        ]);

        $studentSubject->update($request->all());

        return redirect()->route('studentSubjects.index')->with('success', 'Student-Subject assignment updated successfully!');
    }

    public function destroy(StudentSubject $studentSubject)
    {
        $studentSubject->delete();

        return redirect()->route('studentSubjects.index')->with('success', 'Student-Subject assignment removed successfully!');
    }
}
