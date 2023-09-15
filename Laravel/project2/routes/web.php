<?php

use App\Http\Controllers\demoController;
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
Route::get("/about", function(){
    return view("about");
});
Route::get("/contact/{city?}", function($city="Ahamdabad"){
    //echo $city;
    //return view("contact", ["city"=>$city]);
    return redirect("/feedback");
});

Route::get("/feedback", function(){
    return view("feedback");
});

Route::get("/cont1", [demoController::class, 'greetings1']);
Route::get("/cont2", [demoController::class, 'greetings2']);
Route::get("/cont3/{name}", [demoController::class, 'greetings3']);
