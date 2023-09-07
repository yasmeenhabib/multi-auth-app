
@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1>

    <!-- Course editing form -->
    <form method="POST" action="{{ route('courses.update', ['course' => $course]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $course->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" required>{{ $course->description }}</textarea>
        </div>
        <!-- Add other course fields here as needed -->
        <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('courses.destroy', ['course' => $course]) }}" class="btn btn-danger" data-method="delete" data-confirm="Are you sure you want to delete this course?">Delete</a>
    </form>
@endsection
