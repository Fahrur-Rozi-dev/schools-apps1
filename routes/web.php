<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\extracurricularController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[IndexController::class, 'index'])->middleware('auth');
Route::get('/login' , [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logins',[AuthController::class, 'login']);
Route::get('/logout' , [AuthController::class, 'logout'])->middleware('auth');

Route::get('/extracurriculars/{id}',[extracurricularController::class, 'index']);


Route::get('/students' , [StudentsController::class, 'Students'])->middleware('auth');
Route::get('/student/{id}',[StudentsController::Class,'show']);
Route::get('/student-edit/{id}' , [StudentsController::class, 'Edit']);
Route::get('/insert-data' , [StudentsController::class, 'create']);
Route::post('/post-data', [StudentsController::class, 'store']);
Route::get('/student-delete/{id}',[StudentsController::class,'delete']);
Route::put('/student-update/{id}' , [StudentsController::class, 'update']);
Route::delete('/student-destroy/{id}',[StudentsController::class,'destroy']);
Route::get('/student-deleted-data',[StudentsController::class,'softdeletedata']);
Route::get('/restore/{id}/data',[StudentsController::class,'restoreDataStudent']);



Route::get('/class' , [ClassController::class, 'index']);
Route::get('/class-detail/{id}',[ClassController::Class,'show']);
Route::get('/class-add',[ClassController::class, 'create']);
Route::post('/class-add',[ClassController::class,'store']);
Route::delete('/class-delete/{id}',[ClassController::class,'delete']);


Route::get('/teachers',[TeacherController::class,'index']);



Route::get('/exampleaccount',function(){
    $data = ["ADMIN ACCOUNT","Email:admin@gmail.com","Password:rahasia",
    "User Account","",""
    

];
    return $data;
});

