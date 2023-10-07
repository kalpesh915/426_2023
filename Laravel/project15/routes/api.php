<?php

use App\Http\Controllers\apicontroller;
use App\Http\Controllers\apicontroller1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/getdata/{id?}", [apicontroller::class, 'getData']);
Route::post("/addnewdata",[apicontroller::class, 'addNewdata']);
Route::delete("/deletedata/{id?}", [apicontroller::class, 'deleteData']);
Route::put("/updatedata/{id?}", [apicontroller::class, 'updateData']);
Route::apiResource("/api1", apicontroller1::class);