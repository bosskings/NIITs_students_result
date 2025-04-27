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

// for form submision
Route::post('/encore/register', [StudentDetailController::class, 'createStudents'])->name('encore.createStudents'); 



// route to show details of single student
Route::get('/encore/profile/{id}', [StudentDetailController::class, 'studentsProfile'])->name('encore.studentsProfile'); 

//route for email sending
Route::post('/encore/profile/sendEmail', [StudentDetailController::class, 'sendStudentsEmail'])->name('encore.sendStudentsEmail');

// route to display the email blade template
Route::get('/encore/email',function(){
    $message = [
        'module'=>'PHP',
        'score'=>'99'
    ];

    return view('components.emails', [
        'studentData' => $message
    ]);
});

