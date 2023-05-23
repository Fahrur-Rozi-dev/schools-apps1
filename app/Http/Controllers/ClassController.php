<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
    public function create() {
        $data = teacher::get();
        return view('class-add',['teachers'=>$data]);
    }
    public function store(Request $request) {
        $request->validate([
            'Name'=>'unique:classes'
        ]);
        $class = Classes::create($request->all());
        if ($class) {
            Session::flash('status','success');
            Session::flash('message','Class Berhasil Di Buat');
        }
        return redirect('/class');
    }
    public function delete($id){
        $data = Classes::findOrFail($id)->delete($id);
        if ($data) {
            Session::flash('status','success');
            Session::flash('message','Data Telah Di Hapus');
        }
        return redirect('/class');
    }
}
