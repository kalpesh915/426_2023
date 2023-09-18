<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    //
    public function blade1(){
        $students = ["Kalpesh", "Dev", "Nikhil", "Sunny", "Harshil", "Vivek", "Aashita", "Priya", "Jigar", "Hemang"];
        return view("bladedemo", ["data"=>$students]);
    }
}
