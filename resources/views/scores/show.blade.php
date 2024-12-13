@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Scores List</h2>
    <a href="{{ route('scores.create') }}" class="btn btn-primary mb-3">Assign Score</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Subject Name</th>
                <th>Score</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($scores as $score)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $score->siswa->name }}</td>
                <td>{{ $score->mataPelajaran->subject_name }}</td>
                <td>{{ $score->score }}</td>
                <td>
                    <a href="{{ route('scores.show', $score->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('scores.edit', $score->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('scores.destroy', $score->id) }}" method="POST" class="d-inline">
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
