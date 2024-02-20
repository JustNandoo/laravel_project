<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view( "dashboard.views.student.detail", ['halaman' => 'student' ,
        'title' => 'student',
       'students' => Student::all(),
       ]);
    }
    
    public function show(Student $student){
        return view( "student.detail", [
            'halaman' => 'DetailPage' ,
        'title' => 'detail-student', 'student' => $student//route model binding
    ],);//
    }
    public function show2(Student $student){
        return view( "dashboard.views.student.detail", [
            'halaman' => 'DetailPage' ,
        'title' => 'detail-student', 'student' => $student//route model binding
    ],);//
    }
}