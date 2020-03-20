<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentPageController extends Controller
{
    public function home()
    {
        $students = config('students.students');
        $agearray = [];
        foreach ($students as $student) {
            $value = $student['age'];
            if (!in_array($value, $agearray)) {
                $agearray[] = $student['age'];
            }
        }
        sort($agearray);
        $rolearray = [];
        foreach ($students as $student) {
            $value = $student['role'];
            if (!in_array($value, $rolearray)) {
                $rolearray[] = $student['role'];
            }
        }
        return view('students', compact('students', 'agearray', 'rolearray'));
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
    
    public function db()
    {
        $students = Student::all();
        
        
        dd($students);

        /* return view('student', compact('student')); */
    }
}
