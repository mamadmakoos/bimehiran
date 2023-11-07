<?php

use App\Http\Controllers\HomeController;
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
/* For static pages */
Route::get('/', [HomeController::class,'main'])->name('home');
Route::get('/about-us', [HomeController::class,'aboutUs'])->name('about_us');
Route::get('/weblog', [HomeController::class,'weblog'])->name('weblog');
Route::get('/post', [HomeController::class,'post'])->name('post');
