@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Teacher</h2>
    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $guru->name) }}" required>
        </div>
        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" class="form-control" id="specialization" name="specialization" value="{{ old('specialization', $guru->specialization) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Teacher</button>
    </form>
</div>
@endsection
