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

     //生徒情報の新規登録、登録後に一覧表示
     public function insertStudent(Request $request){

        $student = new Student;

        $student->name = $request->name;


        $student->kana = $request->kana;
        $student->gender = $request->gender;
        $student->school_grade = $request->school_grade;
        $student->class = $request->class;
        $student->save();

        $students = $this->getStudentList();
        return $students;
    }

    //生徒情報の削除
    public function deleteStudent(Request $request){
        $student = Student::find($request->id);
        $student->delete();

        $students = $this->getStudentList();
        return $students;
    }
}
