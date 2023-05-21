<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index () {

        $data = Classes::with(['Student','Teachers'])->get();

        return view('classes' , ['data' => $data]);
    }
    
    function show($id) {
        
        $data = Classes::with(['Student','Teachers'])->findOrFail($id);
        
        return view('class-detail',['classDetail'=>$data]);
    }
}
