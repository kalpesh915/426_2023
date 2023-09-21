<?php

use App\Http\Controllers\databaseController;
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

Route::get("/getdata", [databaseController::class, 'getData']);
Route::get("/getdata1", [databaseController::class, 'getData1']);
Route::get("/getapidata", [databaseController::class, 'getAPIData']);