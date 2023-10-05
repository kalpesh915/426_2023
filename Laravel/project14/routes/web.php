<?php

use App\Http\Controllers\databaseController;
use App\Models\student;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
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
Route::get("/setdata", [databaseController::class, 'setData']);
Route::get("/one2one", [databaseController::class, 'one2one']);
Route::get("/one2many", [databaseController::class, 'one2many']);

Route::get("/string1", function(){
    $str = "welcome to world of strings with laravel";
    echo "<hr>".$str;
    echo "<hr>".Str::ucfirst($str);
    echo "<hr>".Str::upper($str);
    echo "<hr>".Str::lower($str);
    echo "<hr>".Str::camel($str);
    echo "<hr>".Str::replaceFirst("to", "TO", $str);
    echo "<hr>".Str::of($str)->ucfirst()->replace("o", "O");
    echo "<hr>".Str::before($str, "of");
    echo "<hr>".Str::after($str, "of");
    echo "<hr>".Str::repeat($str, 5);
    echo "<hr>".Str::words($str, 5);
    echo "<hr>".Str::between($str, "to", "with");
    echo "<hr>".Str::contains($str, "to");
    echo "<hr>".Str::startsWith($str, "welcome");
    echo "<hr>".Str::endsWith($str, "laravel");
    echo "<hr>".Str::repeat(Str::between($str, "to", "with"), 5);
    echo "<hr>".Str::upper(Str::between($str, "to", "with"));
    echo "<hr>".Str::ucfirst(Str::between($str, "to", "with"));
});

Route::get("/routemodel/{id}", function(student $id){
    return $id;
});