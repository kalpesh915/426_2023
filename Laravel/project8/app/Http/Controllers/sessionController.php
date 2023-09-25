<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //
    public function flashSession(Request $request){
        //return $request->input();
        session()->flash("uname", $request->input("fname"));
        return redirect("/greetings");
    }

    public function loginProcess(Request $request){
        if($request->input("uname") == "admin" && $request->input("upass") == "admin"){
            session()->push("user", $request->input("uname"));
            return redirect("/about");
        }else{
            session()->flash("error", "Invalid Username or Password");
            return redirect("/");
        }
    }
}
