<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function emailUser(){
        $data = User::with('role')->get();

        return view('email-user',['user'=>$data]);
    }
    public function store(Request $request){
        $validate = $request->validate([
            'email'=>'unique:users',
            'name'=>'unique:users'
        ]);
        $data = User::create($request->all());
        if($data){
            Session::flash('status','created');
            Session::flash('massage','success created account');
            return redirect('/login');
        } else {
            Session::flash('status','failed');
            Session::flash('massage','Anda Sudah memiliki Akun');
            return redirect('/register');
        }

    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }else{

            Session::flash('status','failed');
            Session::flash('massage','Email Atau Kata Sandi Salah!');
            return redirect('/login');
        }

    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}


