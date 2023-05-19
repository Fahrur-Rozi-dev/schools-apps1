<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function Students() {
        $data = Student::all();
        return view('Students',['data' => $data]);
    }
    function create() {
        $data = Classes::select('id', 'Name') ->get();
        return view('insert-data', ['class' => $data]);
    }
    function Edit(Request $request , $id) {
        $student = Student::findOrFail($id);
        return view('student-edit', ['data' => $student]);
    }
    function class() {
        $data = Classes::all();
        return view('classes');
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
