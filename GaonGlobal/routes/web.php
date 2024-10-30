<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\SingupOptionController;
use App\Http\Controllers\auth\SingupController;

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
