@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student-Subject Assignments</h2>
    <a href="{{ route('studentSubjects.create') }}" class="btn btn-primary mb-3">Assign Subject</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Subject Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentSubjects as $studentSubject)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $studentSubject->siswa->name }}</td>
                <td>{{ $studentSubject->mataPelajaran->subject_name }}</td>
                <td>
                    <a href="{{ route('studentSubjects.show', $studentSubject->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('studentSubjects.edit', $studentSubject->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('studentSubjects.destroy', $studentSubject->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
