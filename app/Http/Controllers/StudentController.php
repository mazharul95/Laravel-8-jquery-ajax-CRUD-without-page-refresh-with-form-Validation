<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    // public function fetchstudent()
    // {
    //     $students = Student::all();
    //     return response()->json([
    //         'students'=>$students,
    //     ]);
    // }

}
