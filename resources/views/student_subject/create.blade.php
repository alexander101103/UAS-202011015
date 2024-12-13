@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Assign Subject to Student</h2>
    <form action="{{ route('studentSubjects.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="siswa_id">Student</label>
            <select class="form-control" id="siswa_id" name="siswa_id" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mata_pelajaran_id">Subject</label>
            <select class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id" required>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Assign Subject</button>
    </form>
</div>
@endsection
