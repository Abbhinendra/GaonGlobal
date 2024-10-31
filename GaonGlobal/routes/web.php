<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\SingupOptionController;
use App\Http\Controllers\auth\SingupController;
use App\Http\Controllers\auth\GoogleController;
use App\Http\Controllers\auth\ForgotPasswordController;
//home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

//public page
Route::resource('signupoption', SingupOptionController::class);

Route::get('singup-page/{type}', [SingupController::class ,'singUpType'])->name('singupPage');

//user registration
Route::post('/registration', [SingupController::class,'registration'])->name('singup');
Route::get('/login-page', [SingupOptionController::class, 'loginPage'])->name('loginPage');
//logout

Route::get('logout', [SingupController::class,'logout'])->name('logout');
Route::post('login', [SingupController::class, 'login'])->name('login');

Route::get('/auth/redirect', [GoogleController::class,'googleRedirect'])->name('googleRedirected');
Route::get('/auth/google/callback', [GoogleController::class,'googleLogin'])->name('googleLogin');

Route::get('/forgot-password-page', [ForgotPasswordController::class,'index'])->name('forgotPass');
Route::post('/pass-reset-link', [ForgotPasswordController::class,'sendPassResetLink'])->name('passReset');
Route::get('/reset-pass', [ForgotPasswordController::class,'resetPass'])->name('resetPass');
Route::post('/change-pass',[ForgotPasswordController::class,'changePassword'])->name('changePass');
