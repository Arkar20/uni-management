<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class TeacherAuthController extends Controller
{
    public function index()
    {
        return view('teacher.login');
    }
    public function store(Request $request)
    {
        $request->validate([ 
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

            if (!Auth::guard('teacher')->attempt($request->only('email', 'password'))) {

                throw ValidationException::withMessages([
                    'email' => __('auth.failed'),
                ]);
        }

        return redirect()->route('teacher.profile');

    }

    public function logout()
    {
          Auth::guard('teacher')->logout();

        return redirect()->route('teacher.loginview');
    }
}
