@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Subject</h2>
    <form action="{{ route('mata-pelajaran.update', $mataPelajaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="subject_name">Subject Name</label>
            <input type="text" class="form-control" id="subject_name" name="subject_name" value="{{ old('subject_name', $mataPelajaran->subject_name) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Subject</button>
    </form>
</div>
@endsection
