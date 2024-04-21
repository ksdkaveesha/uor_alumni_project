<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AluminiMemberController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestamonialsController;
use App\Http\Controllers\CheckTestamonialsController;
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



Route::get('/', [AdminController::class,'display_notice']);

Route::get('/news', [AdminController::class,'display_notice_testamonials']);

Route::get('/register', function () {
    return view('template/register');
});

Route::get('/login', function () {
    return view('template/login');
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

Route::get('/admin2', function () {
    return view('template/admin2');
});

Route::get('/admin', [CheckTestamonialsController::class,'display_check_testamonials']);

Route::post('/register_form', [AluminiMemberController::class,'register_alumini_member']);
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class,'logout'])->name('logout');
Route::post('/update', [AluminiMemberController::class,'update']);
Route::post('/add_photo', [AluminiMemberController::class,'add_photo']);
Route::post('/add_notice', [AdminController::class,'add_notice']);
Route::post('/check_testamonials', [CheckTestamonialsController::class,'check_testamonials']);
Route::get('/check_testamonials_del/{id}', [CheckTestamonialsController::class,'testamonials_del']);
