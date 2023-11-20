<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// for profile
Route::prefix('profile')->middleware('user')->group(function (){
Route::get('/', [ProfileController::class, 'index'])->name('user_profile');
Route::post('/edit-profile-action', [ProfileController::class, 'editProfileAction'])->name('edit_profile_action');
Route::get('/credit', [ProfileController::class, 'credit'])->name('user_credit');
Route::post('/credit-action', [ProfileController::class, 'creditAction'])->name('user_credit_action');
Route::get('/password', [ProfileController::class, 'password'])->name('user_password');
Route::post('/password-action', [ProfileController::class, 'passwordAction'])->name('user_password_action');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});

Route::any('/check-payment', [ProfileController::class, 'checkPayment'])->name('user_check_payment');

// for login register logout
Route::post('login-register', [UserController::class, 'index'])->name('login_register');
Route::post('check-code', [UserController::class, 'checkCode'])->name('check_code');
