<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentDetailController;
use Illuminate\Support\Facades\Route;



// routes to the main website.
Route::get('/', function(){ return view('niit/index'); })->name('home');
Route::get('/diploma', function(){ return view('niit/diploma'); })->name('diploma');
Route::get('/courses', function(){ return view('niit/courses'); })->name('courses');
Route::get('/contact', function(){ return view('niit/contact'); })->name('contact');
Route::get('/about', function(){ return view('niit/about'); })->name('about');


// route to go to the login page
Route::get('/encore/auth', function(){
    return view('encore/authentication');
})->name('encore.login');

Route::post('/encore/auth', [AuthController::class, 'authentication'])->name('login.auth');


// route to test logout system
Route::get('/logout', function(){

    session(['is_admin_authenticated' => false]);
    return redirect('/encore/auth');
    
});

// authentication middleware starts
Route::middleware('admin')->group(function () {
    
    Route::get('/encore', function () {
        return view("encore/index");
    })->name('encore.index');

    //auto complete for the form 
    Route::get('/encore/studentSearch', [StudentDetailController::class, 'searchStudents'])->name('encore.searchStudents'); 



    // route to show the register page
    Route::get('/encore/register', [StudentDetailController::class, 'viewRegistration'])->name('encore.viewRegistration'); 

    // for students registration
    Route::post('/encore/register', [StudentDetailController::class, 'createStudents'])->name('encore.createStudents'); 


    // route to update students details
    Route::post('/encore/showStudentsDetail', [StudentDetailController::class, 'showStudentsDetail'])->name('encore.showStudentsDetail');

    // route to help change / modify students detail
    Route::get('/encore/updateStudents', [StudentDetailController::class, 'updateStudents'])->name('encore.updateStudents');


    // route to show details of single student
    Route::get('/encore/profile/{id}', [StudentDetailController::class, 'studentsProfile'])->name('encore.studentsProfile'); 


    // route to show records from all students in a given batch
    Route::get('/encore/batch/{id}', [StudentDetailController::class, 'viewBatch'])->name('encore.batch');


    //route for email sending
    Route::post('/encore/profile/sendEmail', [StudentDetailController::class, 'sendStudentsEmail'])->name('encore.sendStudentsEmail');


    // route to send multiple emails to students in a batch
    Route::post('/encore/sendBatchEmail', [StudentDetailController::class, 'sendBatchEmail'])->name('encore.sendBatchEmail');

});
// require __DIR__.'/auth.php';
