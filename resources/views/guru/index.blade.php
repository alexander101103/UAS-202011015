@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Teachers List</h2>
    <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Add New Teacher</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Specialization</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($guru as $teacher)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->specialization }}</td>
                <td>
                    <a href="{{ route('guru.show', $teacher->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('guru.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('guru.destroy', $teacher->id) }}" method="POST" class="d-inline">
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
