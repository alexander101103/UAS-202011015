@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Score</h2>
    <form action="{{ route('scores.update', $score->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="siswa_id">Student</label>
            <select class="form-control" id="siswa_id" name="siswa_id" required>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" {{ $student->id == $score->siswa_id ? 'selected' : '' }}>
                        {{ $student->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mata_pelajaran_id">Subject</label>
            <select class="form-control" id="mata_pelajaran_id" name="mata_pelajaran_id" required>
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ $subject->id == $score->mata_pelajaran_id ? 'selected' : '' }}>
                        {{ $subject->subject_name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="score">Score</label>
            <input type="number" class="form-control" id="score" name="score" value="{{ old('score', $score->score) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Score</button>
    </form>
</div>
@endsection
