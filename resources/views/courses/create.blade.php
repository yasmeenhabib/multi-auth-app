<!-- resources/views/courses/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Course</h1>

    <!-- Course creation form -->
    <form method="POST" action="{{ route('courses.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>
        <!-- Add other course fields here as needed -->
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
