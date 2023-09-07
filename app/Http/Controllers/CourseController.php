<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{


public function index()
{
    $courses = Course::all();
    return view('courses.index', compact('courses'));
}

public function create()
{
    return view('courses.create');
}

public function store(Request $request)
{
   // Validate the incoming form data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        // Add any other validation rules for your course fields
    ]);

    // Create and store a new course
    $course = new Course();
    $course->title = $request->input('title');
    $course->description = $request->input('description');
    // Add other course properties as needed
    $course->save();

    // Redirect to the course list page with a success message
    return redirect()->route('courses.index')->with('success', 'Course created successfully!');
}

public function show(Course $course)
{
    return view('courses.show', compact('course'));
}

public function edit(Course $course)
{
    return view('courses.edit', compact('course'));
}

public function update(Request $request, Course $course)
{
     // Validate the incoming form data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        // Add any other validation rules for your course fields
    ]);

    // Update the course with the new data
    $course->title = $request->input('title');
    $course->description = $request->input('description');
    // Update other course properties as needed
    $course->save();

    // Redirect to the course list page with a success message
    return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
}

public function destroy(Course $course)
{
    // Delete the course
    $course->delete();

    // Redirect to the course list page with a success message
    return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
}




















}
