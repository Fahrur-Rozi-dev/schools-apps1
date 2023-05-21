<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        $data = teacher::get();

        return view('teachers',['guru' => $data]);
    }
}
