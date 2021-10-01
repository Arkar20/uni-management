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
<<<<<<< HEAD
    }

    public function show()
    {
        return view('students.show',['courses'=>Course::latest()->paginate(6)]);

=======
>>>>>>> 3b7a8e1a23596b5e45efc429ecce9ae737848e8e
    }
}
