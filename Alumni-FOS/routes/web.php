<?php

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('template/register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/forgot', function () {
    return view('forgot_pwd');
});

Route::get('/update', function () {
    return view('template/update');
});

Route::post('/admin_form', [AluminiMemberController::class,'register_alumini_member']);
//Route::post('/admin_form', [DepartmentController::class,'register_alumini_member']);
