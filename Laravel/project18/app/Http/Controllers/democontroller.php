<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class democontroller extends Controller
{
    //
    public function demo1(){
        echo "<h1>Example od Demo 1 Function</h1>";
    }

    public function demo2(){
        echo "<h1>Example od Demo 2 Function</h1>";
    }

    public function demo3(){
        echo "<h1>Example od Demo 3 Function</h1>";
    }

    public function demo4(){
        echo "<h1>Example od Demo 4 Function</h1>";
    }

    public function demo5(){
        echo "<h1>Example od Demo 5 Function</h1>";
    }

    public function inline(){
        $year = date("Y");
        //return Blade::render('<h1>Inline Blade Example </h1>');
        return Blade::render('<h1>Welcome to {{$year}} </h1>', ["year" => $year]);
    }

}
