@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Teacher Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $guru->name }}</h5>
            <p class="card-text"><strong>Specialization:</strong> {{ $guru->specialization }}</p>
            <a href="{{ route('guru.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection
