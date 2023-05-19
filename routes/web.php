<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/extracurriculars/{id}',[extracurricularController::class, 'index']);

Route::get('/',[IndexController::class, 'index']
);

Route::get('/student-edit/{id}' , [StudentsController::class, 'Edit']);

Route::get('/students' , [StudentsController::class, 'Students']);
Route::get('/insert-data' , [StudentsController::class, 'create']);
Route::get('/class' , [StudentsController::class, 'class']);


Route::post('/post-data', [StudentsController::class, 'store']);


Route::put('/student-update/{id}' , [StudentsController::class, 'update']);

