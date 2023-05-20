<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function Students() {
        $data = Student::with('Class')->get();
        return view('Students',['data' => $data]);
    }
    function create() {
        $data = Classes::select('id', 'Name') ->get();
        return view('insert-data', ['class' => $data]);
    }
    function Edit(Request $request , $id) {
        $student = Student::findOrFail($id);
        $class = Classes::where('id','!=' , $student->Class_id)->get(['id','Name']);
        return view('student-edit', ['data' => $student , 'class' => $class]);
    }
    public function store(Request $request) {
        $student = Student::create($request->all());
        return redirect('/students');

    }
    public function update(Request $request , $id) {
        
        $student = Student::findOrFail($id)->update($request->all());
        return redirect('/students');
    }
}
