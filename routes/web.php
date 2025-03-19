<?php

use App\Http\Controllers\StudentDetailController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/encore', function () {
    return view("encore/index");
});

Route::get('/encore/register', [StudentDetailController::class, 'viewRegisteration']);

Route::get('/encore/profile/{id}', [StudentDetailController::class, 'stuentsProfile']);

Route::post('/encore/register', [StudentDetailController::class, 'createStudents']);
