@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Subject Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $mataPelajaran->subject_name }}</h5>
            <p class="card-text"><strong>Subject Name:</strong> {{ $mataPelajaran->subject_name }}</p>
            <a href="{{ route('mata-pelajaran.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
