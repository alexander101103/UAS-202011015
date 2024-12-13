@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Student-Subject Assignment</h2>
    <form action="{{ route('studentSubjects.update', $studentSubject->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="siswa_id">Student</label>
            <select class="form-control" id="siswa_id" name="siswa_id" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $studentSubject->siswa_id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mata_pelajaran_id">Subject</label>
            <select class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id" required>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $subject->id == $studentSubject->mata_pelajaran_id ? 'selected' : '' }}>
                        {{ $subject->subject_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Assignment</button>
    </form>
</div>
@endsection