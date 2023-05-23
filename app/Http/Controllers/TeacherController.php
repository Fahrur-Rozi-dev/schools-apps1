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
    
}
