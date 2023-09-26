<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class databaseController extends Controller
{
    //
    public function getData(){
        $studentData = student::all();
        return view("getdata", ["students" => $studentData]);
    }

    public function getPagination(){
        $studentData = student::paginate(5);
        return view("paginate", ["students" => $studentData]);
    }
}
