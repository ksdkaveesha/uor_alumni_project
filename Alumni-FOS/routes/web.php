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

Route::get('/index', function () {
    return view('index');
});

Route::get('/register2', function () {
    return view('template/reg');
});

Route::get('/register', function () {
    return view('template/register');
});

Route::get('/login', function () {
    return view('template/login');
});

Route::get('/login2', function () {
    return view('login');
});

Route::get('/forgot', function () {
    return view('forgot_pwd');
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


Route::post('/register_form', [AluminiMemberController::class,'register_alumini_member']);
Route::post('/login', [LoginController::class,'authenticate']);
