<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/encore', function () {
    return view("encore/index");
});

Route::get('/encore/register', function () {
    return view('encore.registration');
});

Route::get('/encore/profile', function(){
    return view('encore.profile');
});

Route::post('/encore/register', function () {
    return view('encore.registration');
});
