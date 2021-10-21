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
        return view('admin.course.index', [
            'courses' => Course::latest()->simplePaginate(10),
        ]);
    }
    public function create()
    {
       return view('admin.course.course');
    }
    public function delete(Course $course)
    {
        $course->delete();

        return back()->with('meg','Course Deleted Successfully!');
    }
    public function edit(Course $course)
    {


        return view('admin.course.courseedit', [
            'courses' => Course::latest()->paginate(10),
            'course' => $course,
        ]);
    }
    public function update(Course $course,CourseRequest $request)
    {
    //  return $request->all();
        // dd($request->all());
        $course->update(['name'=>$request->name,
                            'desc'=>$request->desc,
                         'course_img'=>$request->img?$request->img->storeAs('imgs',$request->img->getClientOriginalName()):null,
                         'teacher_id'=>$request->teacher_id,
                         'start_date'=>$request->start_date,
                         'end_date'=>$request->end_date,
                         "price"=>$request->price,    
                         'major'=>$request->major,                    
                        ]);

        return redirect()->route('staff.course')->with('meg','Course Updated Successfully!');
    }
    public function store(CourseRequest $request)
    {
        // dd($request->toArray());
        Course::create(['name'=>$request->name,
                            'desc'=>$request->desc,
                         'course_img'=>$request->img->storeAs('imgs',$request->img->getClientOriginalName()),
                         'teacher_id'=>$request->teacher_id,
                         'start_date'=>$request->start_date,
                         'end_date'=>$request->end_date,
                         "price"=>$request->price,    
                         'major'=>$request->major,                    
                        ]);

        return redirect()->route('staff.course')->with('meg','Course Created Successfully!');
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
