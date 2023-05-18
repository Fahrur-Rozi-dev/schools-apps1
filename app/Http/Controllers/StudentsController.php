<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    function Students() {
        $data = Student::all();
        return view('Students');
    }
    function create() {
        $data = Classes::select('id', 'Name') ->get();
        return view('insert-data', ['class' => $data]);
    }
    function class() {
        $data = Classes::all();
        return view('classes');
    }
    public function store(Request $request) {
        // dd($request->all());
        $student = Student::create($request->all());
        return redirect('/class');

    }
}
