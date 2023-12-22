<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AcademicsController;

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
    return view('welcome');
});

//about
Route::get('/about', [AboutController::class, 'about']);

Route::get('/about/governance', [AboutController::class, 'governance']);
Route::get('/about/opportunities', [AboutController::class, 'opportunities']);
Route::get('/about/partnerships', [AboutController::class, 'partnerships']);

//layouts
Route::get('/layouts/main', [LayoutController::class, 'main']);

//school
Route::get('/academics/school', [AcademicsController::class, 'schools']);

//pages
Route::get('/pages/about', [PagesController::class, 'about']);
Route::get('/pages/academics', [PagesController::class, 'academics']);
Route::get('/pages/admmisions', [PagesController::class, 'admmisions']);
Route::get('/pages/contacts', [PagesController::class, 'contacts']);
Route::get('/pages/home', [PagesController::class, 'home']);
Route::get('/pages/studentlife', [PagesController::class, 'studentlife']);

//studentlife
Route::get('/studentlife/Academic-calender', [PagesController::class,'Academic-calender']);
Route::get('/studentlife/Campus-life', [PagesController::class,'Campus-life']);
Route::get('/student-life/galery', [PagesController::class,'galery']);
Route::get('/studentlife/ICT-Services', [PagesController::class,'ICT-Services']);
Route::get('/studentlife/timetable', [PagesController::class,'timetable']);
