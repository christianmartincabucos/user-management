<!-- resources/views/students/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Students</h1>
        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New Student</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->email }}</td>
                        <td class="d-flex">
                            <a href="{{ route('students.show', $student) }}" class="btn btn-outline-info me-2">Show</a>
                            <a href="{{ route('students.edit', $student) }}" class="btn btn-outline-secondary me-2">Edit</a>
                            <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
