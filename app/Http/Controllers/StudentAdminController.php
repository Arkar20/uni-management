<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    public function index()
    {
        $students=User::latest()->paginate(10);
        return view('admin.student.index',compact('students'));
    }
}
