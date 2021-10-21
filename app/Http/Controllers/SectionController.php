<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function index()
    {
        return view('admin.section.index');
    }
    public function edit($id)
    {
        $course=Course::find($id);
        return view('admin.section.create',compact('course'));
    }
    public function store(Request $request){

    //    dd($request->course_id);
    $value= $request->validate(['course_id'=>'required',
                            'name'=>'required|min:3|max:255',
                            'desc'=>'required|min:3|max:255'

    ]);

    Section::create($value);

    return redirect()->route('staff.course')->with('meg',"Section added!");

    }
}
