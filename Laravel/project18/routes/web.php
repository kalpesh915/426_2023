<?php

use App\Http\Controllers\democontroller;
use Illuminate\Support\Facades\Blade;
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

Route::view("/about", "about");
Route::view("/contact", "contact");
Route::view("/feedback", "feedback");
Route::view("/products", "products");



/*
Route::get("/demo1", [democontroller::class, 'demo1']);
Route::get("/demo2", [democontroller::class, 'demo2']);
Route::get("/demo3", [democontroller::class, 'demo3']);
Route::get("/demo4", [democontroller::class, 'demo4']);
Route::get("/demo5", [democontroller::class, 'demo5']);

*/

Route::controller(democontroller::class)->group(function () {
    Route::get("/demo1", 'demo1');
    Route::get("/demo2", 'demo2');
    Route::get("/demo3", 'demo3');
    Route::get("/demo4", 'demo4');
    Route::get("/demo5", 'demo5');
    Route::get("/inline", 'inline');
});

