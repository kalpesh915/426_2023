<?php

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


Route::view("/", "welcome");
Route::group(["middleware"=>"age"], function(){
    Route::view("/about", "about");
    Route::view("/feedback", "feedback");
    Route::view("/contact", "contact");
});
Route::view("/login", "login")->middleware("year");
Route::view("/error", "error");
Route::view("/urldemo", "url");
