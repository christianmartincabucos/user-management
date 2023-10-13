@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Add New Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <!-- Add your form fields here -->
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" id="first_name" name="first_name" required>
                @error('first_name')
                    <div class="invalid-feedback">
                        @foreach ($errors->get('first_name') as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" id="last_name" name="last_name" required>
                @error('last_name')
                    <div class="invalid-feedback">
                        @foreach ($errors->get('last_name') as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="course">Course:</label>
                <input type="text" class="form-control @error('course') is-invalid @enderror" value="{{ old('course') }}" id="course" name="course" required>
                @error('course')
                    <div class="invalid-feedback">
                        @foreach ($errors->get('course') as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" required>
                @error('email')
                    <div class="invalid-feedback">
                        @foreach ($errors->get('email') as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
@endsection
