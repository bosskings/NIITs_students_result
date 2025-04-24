<?php

use App\Http\Controllers\StudentDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/encore', function () {
    return view("encore/index");
});

//auto complete for the form 
Route::get('/encore/studentSearch', [StudentDetailController::class, 'searchStudents'])->name('encore.searchStudents'); 

// route to show the register page
Route::get('/encore/register', [StudentDetailController::class, 'viewRegistration'])->name('encore.viewRegistration'); 

// route to show details of single student
Route::get('/encore/profile/{id}', [StudentDetailController::class, 'studentsProfile'])->name('encore.studentsProfile'); 

// for form submision
Route::post('/encore/register', [StudentDetailController::class, 'createStudents'])->name('encore.createStudents'); 
