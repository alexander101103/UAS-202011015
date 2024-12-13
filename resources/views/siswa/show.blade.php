@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $siswa->name }}</h5>
            <p class="card-text"><strong>NISN:</strong> {{ $siswa->nisn }}</p>
            <p class="card-text"><strong>Birthdate:</strong> {{ $siswa->birthdate }}</p>
            <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
