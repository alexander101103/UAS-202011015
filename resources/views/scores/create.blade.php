@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Assign Score to Student</h2>
    <form action="{{ route('scores.store') }}" method="POST">
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
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" class="form-control" id="score" name="score" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Assign Score</button>
    </form>
</div>
@endsection
