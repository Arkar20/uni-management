<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('admin.course.course', [
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
            'courses' => Course::latest()->paginate(10),
            'course' => $course,
        ]);
    }
    public function update(Course $course, CourseRequest $request)
    {
        $course->update($request->toArray());

        return redirect()->route('course.index');
    }
    public function store(CourseRequest $request)
    {
        // dd($request->toArray());
        Course::create($request->toArray());

        return back();
    }
}
