<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        $data = teacher::with('Class')->get();

        return view('teachers',['guru' => $data]);
    }
    public function create() {

        return view('teachers-add');
    }

    public function store(Request $request){
         $validate = $request->validate([
            'Name' => 'unique:teachers'
        ]);
        $data = teacher::create($request->all());
        return redirect('/teachers');
    }
}
