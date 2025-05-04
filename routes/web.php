<?php

use App\Http\Controllers\StudentDetailController;
use App\Mail\sendStudentResult;
use Illuminate\Support\Facades\Route;

Route::get('/encore', function () {
    return view("encore/index");
});

//auto complete for the form 
Route::get('/encore/studentSearch', [StudentDetailController::class, 'searchStudents'])->name('encore.searchStudents'); 



// route to show the register page
Route::get('/encore/register', [StudentDetailController::class, 'viewRegistration'])->name('encore.viewRegistration'); 

// for students registeration
Route::post('/encore/register', [StudentDetailController::class, 'createStudents'])->name('encore.createStudents'); 



// route to show details of single student
Route::get('/encore/profile/{id}', [StudentDetailController::class, 'studentsProfile'])->name('encore.studentsProfile'); 


// route to show records from all students in a given batch
Route::get('/encore/batch/{id}', [StudentDetailController::class, 'viewBatch'])->name('encore.batch');


//route for email sending
Route::post('/encore/profile/sendEmail', [StudentDetailController::class, 'sendStudentsEmail'])->name('encore.sendStudentsEmail');

