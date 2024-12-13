@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Subjects List</h2>
    <a href="{{ route('mata-pelajaran.create') }}" class="btn btn-primary mb-3">Add New Subject</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Subject Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mataPelajaran as $subject)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $subject->subject_name }}</td>
                <td>
                    <a href="{{ route('mata-pelajaran.show', $subject->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('mata-pelajaran.edit', $subject->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mata-pelajaran.destroy', $subject->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
