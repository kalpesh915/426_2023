<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class databaseController extends Controller
{
    //
    public function getData(){
        //return "Called";
        return DB::select("select * from students");
    }

    public function getData1(){
        //return student::all();
        return student::all(["id","fname", "lname"]);
    }

    public function getAPIData(){
        $productsData = Http::get("https://dummyjson.com/products");
        return view("apidata", ["products" => $productsData["products"]]);
        //return $productsData;
    }
}
