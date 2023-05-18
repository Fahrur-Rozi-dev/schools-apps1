<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StudentsController;

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

Route::get('/',[IndexController::class, 'index']
);

Route::get('/students' , [StudentsController::class, 'Students']);
Route::get('/insert-data' , [StudentsController::class, 'create']);
Route::get('/class' , [StudentsController::class, 'class']);
Route::post('/post-data', [StudentsController::class, 'store']);

