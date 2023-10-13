@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">{{ $student->name }}</h1>
        <!-- Display your student details here -->
        <p><strong>First Name:</strong> {{ $student->first_name }}</p>
        <p><strong>Last Name:</strong> {{ $student->last_name }}</p>
        <p><strong>Course:</strong> {{ $student->course }}</p>
        <p><strong>Email:</strong> {{ $student->email }}</p>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Back to Students</a>
    </div>
@endsection
