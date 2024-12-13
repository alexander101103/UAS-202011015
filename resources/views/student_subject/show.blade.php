@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student-Subject Assignment Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $studentSubject->siswa->name }} - {{ $studentSubject->mataPelajaran->subject_name }}</h5>
            <p class="card-text"><strong>Student:</strong> {{ $studentSubject->siswa->name }}</p>
            <p class="card-text"><strong>Subject:</strong> {{ $studentSubject->mataPelajaran->subject_name }}</p>
            <a href="{{ route('studentSubjects.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
