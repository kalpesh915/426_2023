<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    //
    public function greetings1(){
        echo "Welcome to world of Controllers";
    }

    public function greetings2(){
        return view("feedback");
    }

    public function greetings3($name){
        echo "Welcome $name";
        return view("feedback");
    }
}
