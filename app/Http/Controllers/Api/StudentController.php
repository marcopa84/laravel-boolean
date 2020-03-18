<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   
    public function  age(Request $request){

        $result = [
            'error' => '',
            'resonse' => []
        ];

        $data = $request->all();
        $students = config('students.students');
        var_dump($data['age']);
    }
    
    public function  role(Request $request){
        $data = $request->all();

    }
}