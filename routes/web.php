<?php

use App\Http\Controllers\TestController;
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

Route::get('/',[TestController::class,'index'])->name('/');
Route::get('/about',[TestController::class,'about'])->name('about');
Route::get('/projects',[TestController::class,'projects'])->name('projects');
Route::get('/contact',[TestController::class,'contact'])->name('contact');


