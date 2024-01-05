<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LateController;
use Illuminate\Support\Facades\Auth;

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
    return to_route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::middleware(['isAdmin'])->group(function () {
        Route::resource('rombels', RombelController::class);
        Route::resource('rayons', RayonController::class);
        Route::resource('students', StudentController::class);
    });
    Route::middleware(['isPembimbing'])->group(function () {
        Route::resource('lates', LateController::class);
    });
});