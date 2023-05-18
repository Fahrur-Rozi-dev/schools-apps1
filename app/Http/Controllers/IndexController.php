<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index () {
        dd('dd');
        return view('index');
    }
}
