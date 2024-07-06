<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamAnswerController;
use App\Http\Controllers\ExamQuestionController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\AuthStudent;
use App\Models\examQuestion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});
Route::get("logout", [AuthController::class, "logout"]);
Route::post("login", [AuthController::class, "login"]);

Route::get('/student/dashboard',[AppController::class,'student'])->middleware('student');

Route::resource('student', StudentController::class)->middleware('student');
Route::resource('examquestion', ExamQuestionController::class)->middleware('student');
Route::resource('examanswer', ExamAnswerController::class)->middleware('student');
