<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class apicontroller extends Controller
{
    //
    public function index(Request $request){
        $user = User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response(["error" => "Invalid Username or Password"], 422);
        }else{
            $token = $user->createToken('my-token')->plainTextToken;
            return response([
                "user" => $user,
                "token" => $token
            ], 200);
        }
    }

    public function getStudents(){
        return student::all();
    }
}
