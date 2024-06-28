<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AluminiMemberController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestamonialsController;
use App\Http\Controllers\CheckTestamonialsController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;


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



Route::get('/register', function () {
    return view('template/register');
});
//->middleware('guest');

Route::get('/login', function () {
    return view('template/login');
});
//->middleware('guest')->name('login');

Route::get('/test', function () {
    return view('test');
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

Route::get('/admin', function () {
    return view('template/admin');
});
//->middleware('auth:webadmin');


Route::get('/', [NoticeController::class,'display_notice']);
Route::post('/add_notice', [NoticeController::class,'add_notice']);
Route::get('/news', [NoticeController::class,'display_notice_testamonials']);
Route::get('/admin3', [NoticeController::class,'display_notice_testamonials_adminpage']);
Route::post('/search_notice', [NoticeController::class,'search_notice']);
Route::get('/notice_del/{id}', [NoticeController::class,'notice_del']);

Route::post('/add_photo', [AluminiMemberController::class,'add_photo']);
Route::post('/register_form', [AluminiMemberController::class,'register_alumini_member']);
Route::post('/update', [AluminiMemberController::class,'update']);
Route::get('/user', [AluminiMemberController::class,'display_user']);//->middleware('auth:webalumni');

Route::post('/login', [LoginController::class,'authenticate']);
Route::post('logout', [LoginController::class,'logout'])->name('logout');

Route::post('/check_testamonials', [CheckTestamonialsController::class,'check_testamonials']);
Route::post('/check_testamonials_admin', [CheckTestamonialsController::class,'check_testamonials_admin']);
//Route::get('/admin3', [CheckTestamonialsController::class,'display_check_testamonials']);
Route::get('/check_testamonials_del/{id}', [CheckTestamonialsController::class,'testamonials_del']);
Route::post('/accept_testamonials/{id}', [TestamonialsController::class,'accept_testamonials']);

Route::post('/add_member_by_admin', [AdminController::class,'register_member_by_admin']);
Route::post('/add_admin_by_admin', [AdminController::class,'register_admin_by_admin']);
Route::post('/search_alumni_member', [AdminController::class,'search_alumni_member']);
Route::get('/admin2', [AdminController::class,'display_admin2']);

Route::post('/comment', [CommentController::class,'comment']);

Route::post('/add_gallery', [GalleryController::class,'add_gallery']);
Route::get('/gallery', [GalleryController::class,'show_gallery']);
