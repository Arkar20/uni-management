<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('students.profile',['user'=>auth()->user()]);
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
