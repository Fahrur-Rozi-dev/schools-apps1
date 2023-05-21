<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\extracurricular;

class StudentsController extends Controller
{
    function Students() {
        $data = Student::get();
        return view('Students',['data' => $data]);
    }
    public function show($id) {
        $data = Student::with(['Class.Teachers','extracurriculars'])
        ->findOrFail($id);
        return view('student-detail',['dataDetail'=>$data]);

    }
    function create() {
        $data = Classes::select('id', 'Name') ->get();
        $extra = extracurricular::get(['Name','id']);
        return view('insert-data', ['class' => $data, 'extra' =>$extra]);
    }
    function Edit(Request $request , $id) {
        $student = Student::findOrFail($id);
        $extra = extracurricular::get(['Name','id']);
        $class = Classes::where('id','!=' , $student->Class_id)->get(['id','Name']);
        return view('student-edit', ['data' => $student , 'class' => $class , 'extra'=>$extra]);
    }
    public function store(Request $request) {

        $student = Student::create($request->all());
        $student->extracurriculars()->attach($request->extra);
        return redirect('/students');

    }
    public function update(Request $request , $id) {
        $student = Student::findOrFail($id)->extracurriculars()->sync($request->extra);
        $student = Student::findOrFail($id)->update($request->all());
        return redirect('/students');
    }
}
