<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard/welcome');
});

Route::get('/sign_in', function () {
    return view('auth/sign_in');
});

Route::get('/sign_up', function () {
    return view('auth/sign_up');
});

Route::get('/forgot_password', function () {
    return view('auth/forgot_password');
});

Route::get('/sign_link', function () {
    return view('auth/sign_link');
});
