<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\TeacherUpdateRequest;

class TeacherClientController extends Controller
{
    public function show()
    {
        $teacher=Teacher::first();
        return view('teacher.profile',compact('teacher'));
    }
    public function update(TeacherUpdateRequest $request)
    {
        // dd($request->all());
        $teacher=auth()->guard('teacher')->user()?:Teacher::first();

          $data=[ 
                        'name'=>$request->name,
                        'contact_number'=>$request->contact_number,
                         'password'=>$request->password?Hash::make($request->password):$teacher->password,
                         'contact_number'=>$request->contact_number,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'dob'=>$request->dob,
                        'nrc'=>$request->nrc,
    ];
        $teacher->updateRecord($data);

        return back()->with('meg',"Teacher Profile Updated");
    }
}
