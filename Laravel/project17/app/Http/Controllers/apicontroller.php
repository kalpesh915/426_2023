<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apicontroller extends Controller
{
    //
    public function fileUpload(Request $request){
        return $request->file("file1")->storeAs("uploads", $request->file("file1")->getClientOriginalName());
        
    }   

    public function getDatawithDB(){
        //return DB::connection("mysql")->select("select * from students");
        return DB::connection("mysql1")->select("select * from students");
    }

    public function getDatawithModel(){
        return student::all();
    }
}
