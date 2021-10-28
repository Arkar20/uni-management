<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       
        return view('students.index',['courses'=>Course::latest()->paginate(4)]);
    }

    public function show()
    {
        return view('students.show',['courses'=>Course::latest()->paginate(6)]);

    }
    public function dashboard()
    {
        $total_students_count=User::all()->count();
        $total_teachers_count=Teacher::all()->count();
        $total_courses=Course::all();
        
        $total_sections_count=Section::all()->count();
        $total_courses_count=$total_courses->count();

            return view('admin.index',compact('total_courses_count','total_teachers_count','total_students_count','total_sections_count'));
    }
}
