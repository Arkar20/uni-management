<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
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
}
