<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StudentUpdateRequest;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user=auth()->user();

        $course_ids=$user->attendsections->pluck('course_id');

        $courses=Course::whereIn('id',$course_ids)->get();
        
        return view('students.profile',['user'=>$user,'courses'=>$courses]);
    }
    public function update(StudentUpdateRequest $request)
    {
        // dd($request->all());

       $user=auth()->user();
       $user->update([
           'name' => $request->name,
           'password' => $request->password?Hash::make($request->password):$user->password,
           'email' => $request->email,
           'address' => $request->address,
           'dob' => $request->dob,
           'nrc' => $request->nrc,
       ]);

    return back()->with('meg', "Profile update Successful!");
    }
}
