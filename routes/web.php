<?php
use App\Http\Controllers\StudentController;
use App\Models\Product;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get("", function () {
    return view("welcome");
});


Route::resource("/student",     StudentController::class);