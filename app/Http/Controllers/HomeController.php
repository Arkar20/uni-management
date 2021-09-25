<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       
        return view('students.index',['sections'=>Section::latest()->paginate(4)]);
    }
}
