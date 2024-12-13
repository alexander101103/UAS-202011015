@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Class</h2>
    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="class_name">Class Name</label>
            <input type="text" class="form-control" id="class_name" name="class_name" value="{{ old('class_name', $kelas->class_name) }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Update Class</button>
    </form>
</div>
@endsection