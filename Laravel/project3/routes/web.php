<?php

use App\Http\Controllers\bladeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get("/blade1", [bladeController::class, 'blade1']);