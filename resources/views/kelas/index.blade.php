@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Classes List</h2>
    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">Add New Class</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Class Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $class)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $class->class_name }}</td>
                <td>
                    <a href="{{ route('kelas.show', $class->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('kelas.edit', $class->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kelas.destroy', $class->id) }}" method="POST" class="d-inline">
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
