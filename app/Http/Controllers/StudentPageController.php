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
    
    public function show($id)
    {
        $students = config('students.students');
        if(! array_key_exists($id, $students) ){
            dd('studente non trovato');
        } 
        $student = $students[$id];
        return view('student', compact('student'));
    }
}
