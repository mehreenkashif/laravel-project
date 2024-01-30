<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    if (!Auth::check()) {
        return redirect('/login');
    }
    return view('home');
    });

Auth::routes();

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::resource('Students',StudentController::class);
Route::resource('Teachers',TeacherController::class);
Route::resource('Classes',ClassController::class);
Route::resource('Courses',CoursesController::class);




