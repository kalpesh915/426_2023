<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class databaseController extends Controller
{
    //
    public function getData(){
        return student::all();
    }

    public function setData(){
        $student = new student();

        $student->fname = "Nikhil";
        $student->lname = "dobariya";
        $student->email = "Nikhil@gmail.com";
        $student->phone = "9988778899";
        $student->city = "rajkot";
        $student->save();

        return "New Record Inserted";
    }

    public function one2one(){
        //return student::all();
        return student::find(5)->getAttendance;
    }

    public function one2many(){
        return student::find(4)->getExams;
    }
}
