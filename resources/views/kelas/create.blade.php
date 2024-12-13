@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Class</h2>
    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="class_name">Class Name</label>
            <input type="text" class="form-control" id="class_name" name="class_name" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save Class</button>
    </form>
</div>
@endsection
