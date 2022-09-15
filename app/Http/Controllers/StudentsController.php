<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class StudentsController extends Controller
{
    //生徒一覧の表示
    public function index()
    {
        $students = DB::table('students')->whereNull('deleted_at')->get();
        return view('list',['students' => $students]);
    }

    //登録画面の表示
    public function entry()
    {
        return view('entry');
    }

    //登録処理
    public function store(Request $request)
    {
        {
            $student = new Student;

            $student->name = $request->name;
            $student->kana = $request->kana;
            $student->gender = $request->gender;
            $student->school_grade = $request->school_grade;
            $student->class = $request->class;
            $student->save();
        }
        return redirect()->route('list');
    }

    //編集画面の表示
    public function edit(Request $request)
    {
        $student = Student::find($request->id);

        return view('edit',['student' => $student]);

    }

    //更新処理
    public function update(Request $request)
    {
        {
            $student = Student::find($request->id);

            $student->name = $request->name;
            $student->kana = $request->kana;
            $student->gender = $request->gender;
            $student->school_grade = $request->school_grade;
            $student->class = $request->class;
            $student->save();
        }
        return redirect()->route('list');
    }

    //論理削除処理
    public function delete(Request $request)
    {
        $student = Student::find($request->id);
        $student->delete();

        return redirect()->route('list');
    }

}
