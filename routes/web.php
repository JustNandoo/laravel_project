<?php

use Illuminate\Support\Facades\Route;
use App\Models\Students;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EkstraController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Nando",
        "kelas" => "11 PPLG 1",
        "foto" => "asset/pj.jpg"
    ]);
});

Route::get('/ekstraculicullar', [EkstraController::class,'utama']);

//ROUTES FOR PAGES STUDENT
Route::group(["prefix" => "/student"], function () {
    Route::get('/all', [StudentsController::class,'all2']);
    Route::get('/detail/{student}', [StudentController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
    Route::post('/update/{student}', [StudentsController::class, 'update']);
});

//ROUSTES FOR PAGE KELAS
Route::group(["prefix" => "/kelas"], function () {
    Route::get('/all', [KelasController::class,'index2']);
    Route::get('/create', [KelasController::class,'create']);
    Route::post('/add', [KelasController::class, 'store']);
    Route::get('/edit/{kelas}', [KelasController::class,'edit']);
    Route::delete('/delete/{kelas}', [KelasController::class,'destroy']);
    Route::post('/update/{kelas}', [KelasController::class, 'update']);
});

//ROUTES FOR LOGIN & REGISTER
Route::get('/login', [AuthController::class,'index'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class,'register'])->middleware('guest');
Route::post('/register/store', [AuthController::class,'store']);
Route::post('/login/auth', [AuthController::class,'auth']);
Route::post('/logout', [AuthController::class, 'logout']);


//ROUTES FOR DASHOBOARD
Route::group(["prefix" => "/dashboard"], function() {
    Route::get('/', [DashboardController::class,'index'])->middleware('auth');
    Route::get('/all', [StudentsController::class,'all'])->middleware('auth');
    Route::get('/kelasall', [KelasController::class,'index'])->middleware('auth');
    Route::get('/ekstraculicullar', [EkstraController::class,'utama2'])->middleware('auth');
    Route::get('/student/detail/{student}', [StudentController::class, 'show2'])->middleware('auth');
});

