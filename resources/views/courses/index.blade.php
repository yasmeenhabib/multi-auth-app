	@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
     <table class="table">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>
                        <a href="{{ route('courses.edit', ['course' => $course]) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('courses.destroy', ['course' => $course]) }}" class="btn btn-danger" data-method="delete" data-confirm="Are you sure you want to delete this course?">Delete</a>
                        <a href="{{ route('courses.show', ['course' => $course]) }}" class="btn btn-info">View Details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
