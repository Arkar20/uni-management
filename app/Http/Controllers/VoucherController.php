<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index(Section $section)
    {
        return view('voucher.index',compact('section'));
    }
}
