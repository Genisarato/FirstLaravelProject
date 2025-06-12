<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
})->name('home');;

Route::resource('schools', SchoolController::class);

Route::resource('students', StudentController::class);
