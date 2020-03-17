<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    public function home()
    {
        $students = config('students.students');
        return view('students', compact('students'));
    }
    
    public function show()
    {
        $students = config('students.students');
        return view('student', compact('students'));
    }
}
