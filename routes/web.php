<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/admin',[AdminController::class,'index']);
Route::get('/',[AdminController::class,'index']);


Route::get('/admin/students',[StudentController::class,'index']);
Route::get('/admin/students/create',[StudentController::class,'create']);
Route::post('/admin/students/create',[StudentController::class,'save']);
Route::get('/admin/students/update/{id}',[StudentController::class,'update']);
Route::post('/admin/students/update/{id}',[StudentController::class,'UpdateData']);
Route::get('/admin/students/delete/{id}',[StudentController::class,'delete']);


