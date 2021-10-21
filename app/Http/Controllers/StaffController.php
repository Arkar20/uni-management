<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;

class StaffController extends Controller
{
    public function show(){
        return view('admin.layouts.login');
    } 

    public function login(Request $request)
    {
        $request->validate([ 
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

            if (!Auth::guard('staff')->attempt($request->only('email', 'password'))) {

                throw ValidationException::withMessages([
                    'email' => __('auth.failed'),
                ]);
        }

        return redirect()->route('staff.course');

    }
    public function logout()
    {
        Auth::guard('staff')->logout();

        return redirect()->route('staff.login');
    }
}
