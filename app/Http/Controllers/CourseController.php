<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Requests\CourseRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserSendEmailOnAttendClass;

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


        return view('admin.course.course', [
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
    public function show(Course $course = null)
    {
        return view('students.detail',compact('course'));
    }
    public function attend(Request $request)
    {
        $user=auth()->user()?:User::first();
        
       $data= $user->attendClass($request->section);

        $admin=Staff::first();

       Mail::to($admin)->send(new UserSendEmailOnAttendClass($user));

        return redirect('/');
    }
    public function showPrice(Course $course)
    {
        $sections=$course->sections;

        return view('students.price',compact('sections'));
    }
    public function showSection(Section $section)
    {

        return view('students.section',compact('section'));
    }
}
