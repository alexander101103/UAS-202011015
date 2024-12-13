@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Subject</h2>
    <form action="{{ route('mata-pelajaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="subject_name">Subject Name</label>
            <input type="text" class="form-control" id="subject_name" name="subject_name" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save Subject</button>
    </form>
</div>
@endsection
