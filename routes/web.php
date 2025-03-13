<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view("encore/index");
});


Route::get('/register', function () {
    return view('encore.registration');
});

Route::post('/profile', function(){
    return view('encore.profile');
});
