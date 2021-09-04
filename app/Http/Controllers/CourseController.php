<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.course', [
            'courses' => Course::latest()->simplePaginate(10),
        ]);
    }
    public function delete(Course $course)
    {
        $course->delete();

        return back();
    }
    public function edit(Course $course)
    {
        return view('admin.course', [
            'courses' => Course::all(),
            'course' => $course,
        ]);
    }
    public function update(Course $course, CourseRequest $request)
    {
        $course->update(['name' => $request->name, 'desc' => $request->desc]);

        return redirect()->route('course.index');
    }
    public function store(CourseRequest $request)
    {
        Course::create(['name' => $request->name, 'desc' => $request->desc]);

        return back();
    }
}
