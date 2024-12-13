@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Class Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $kelas->class_name }}</h5>
            <p class="card-text"><strong>Class Name:</strong> {{ $kelas->class_name }}</p>
            <a href="{{ route('kelas.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
