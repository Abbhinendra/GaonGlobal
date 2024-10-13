<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\SingupOptionController;

//home page
Route::get('/', function () {
    return view('welcome');
});


//public page

Route::resource('signupoption', SingupOptionController::class);
