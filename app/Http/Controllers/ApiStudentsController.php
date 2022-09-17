<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class ApiStudentsController extends Controller
{
    //生徒一覧の取得
    public function getStudentList(){
        $students = Student::get();
        return response()->json($students,options: JSON_UNESCAPED_UNICODE);
    }

}
