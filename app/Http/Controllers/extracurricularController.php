<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\extracurricular;

class extracurricularController extends Controller
{
    public Function index () {
        $data = extracurricular::all();
        return view('extracurricular' , ['data' => $data]);
    }
}
