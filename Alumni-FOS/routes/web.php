<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AluminiMemberController;
use App\Http\Controllers\DepartmentController;


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
    return view('template/index');
});

Route::get('/register', function () {
    return view('template/register');
});

Route::get('/login', function () {
    return view('template/login');
});

Route::get('/update', function () {
    return view('template/update');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/user', function () {
    return view('template/user');
});

Route::get('/about', function () {
    return view('template/about');
});

Route::get('/directory', function () {
    return view('template/directory');
});

Route::get('/contact', function () {
    return view('template/contact');
});


Route::get('/update2', function () {
    return view('template/update2');
});



Route::post('/register_form', [AluminiMemberController::class,'register_alumini_member']);
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class,'logout'])->name('logout');

