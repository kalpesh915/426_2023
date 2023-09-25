<?php

use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;
use Whoops\Run;

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
Route::post("/flash1", [sessionController::class, 'flashSession']);

Route::post("/loginprocess", [sessionController::class, 'loginProcess']);

Route::get("/greetings", function(){
    return view("greetings");
});

Route::group(["middleware"=>"secure"], function(){
    Route::view("/about", "about");
    Route::view("/contact", "contact");
    Route::view("/feedback", "feedback");
});

Route::get("/logout", function(){
    if(session("user")){
        session()->pull("user");
        session()->flash("success", "Logout Successfully");
    }else{
        session()->flash("error", "not a valid login found");
    }

    return redirect("/");
});