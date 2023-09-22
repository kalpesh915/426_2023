<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function getProcess(Request $request){
        return $request->input();
    }

    public function postProcess(Request $request){
        return $request->input();
    }

    public function putProcess(Request $request){
        return $request->input();
    }

    public function deleteProcess(Request $request){
        return $request->input();
    }

    public function uploadProcess(Request $request){
        //return $request->file("file1")->store();
        //return $request->file("file1")->store("files/");
        return $request->file("file1")->storeAs("files/", $request->file("file1")->GetClientOriginalName());
        //$request->input("file1")->getClientoriginalname
    }
}