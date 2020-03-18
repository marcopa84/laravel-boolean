<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class StudentController extends Controller
{

    public function  age(Request $request){
        $result = [
            'error' => '',
            'response' => []
        ];
        
        $data = $request->all();
        $students = config('students.students');
        
        foreach ($students as $student) {
            if ($student['age'] == $data['age']) {
               $result['response'][] = $student;
            }
        }
        return response()->json($result);
    }
    
    public function  role(Request $request){
        $result = [
            'error' => '',
            'response' => []
        ];

        $data = $request->all();
        $students = config('students.students');


        foreach ($students as $student) {
            if ($student['role'] == $data['role']) {
                $result['response'][] = $student;
            }
        }
        return response()->json($result);

    }
}