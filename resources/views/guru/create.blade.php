@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Teacher</h2>
    <form action="{{ route('guru.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="specialization">Specialization</label>
            <input type="text" class="form-control" id="specialization" name="specialization" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save Teacher</button>
    </form>
</div>
@endsection
