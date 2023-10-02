<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //

    public function getData(){
        //return DB::table("students")->get();
        //return DB::table("students")->where("city", "Rajkot")->get();
        //return DB::table("students")->find(4);
        //return DB::table("students")->count();

        // Insert Data
        /* return DB::table("students")->insert([
            "fname" => "Jigar",
            "lname" => "Vaghela",
            "city" => "Rajkot",
            "email" => "jigar@gmail.com",
            "phone" => "998877665544"
        ]);*/

        // Update Data
        /*return DB::table("students")->where("id", 3)->update([
            "fname" => "Jigar",
            "lname" => "Vaghela",
            "city" => "Rajkot",
            "email" => "jigar@gmail.com",
            "phone" => "998877665544"
        ]); */

        //return DB::table("students")->where("id", 3)->delete();

        //return DB::table("students")->sum("id");
        //return DB::table("students")->max("id");
        //return DB::table("students")->min("id");
        //return DB::table("students")->avg("id");
        //return DB::table("students")->count("id");

        // Join students table with attendace table
        
        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->get();

        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->select(["students.id", "students.fname", "students.lname", "students.city", "attendance.presents", "attendance.absents"])->get();

        return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->select(["students.id", "students.fname", "students.lname", "students.city", "attendance.presents", "attendance.absents"])->where("students.id", 5)->get();
    }
}
