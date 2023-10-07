<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class apicontroller extends Controller
{
    //
    public function getData($id = 0)
    {
        if ($id == 0) {
            return response(student::all(), 200);
        } else {
            $studentData = student::find($id);

            if ($studentData === null) {
                return response(["Error" => "No Data Found on id $id"], 404);
            } else {
                return response($studentData, 200);
            }
        }
    }

    public function addNewdata(Request $request)
    {
        $student = new student();

        /*
            $student->fname = $request->input("fname");
            $student->lname = $request->input("lname");
            $student->city = $request->input("city");
            $student->email = $request->input("email");
            $student->phone = $request->input("phone");
            $student->save();
            return response(["success" => "New Record Created"], 200);
        */

        $rules = [
            "fname" => "Required",
            "lname" => "Required",
            'email' => "unique:students,email"
        ];

        $myValidator = Validator::make($request->all(), $rules);

        if($myValidator->fails()){
            return response(["error" => $myValidator->errors()], 500);
        }else{
            $student->fname = $request->input("fname");
            $student->lname = $request->input("lname");
            $student->city = $request->input("city");
            $student->email = $request->input("email");
            $student->phone = $request->input("phone");
            $student->save();
            return response(["success" => "New Record Created"], 200);
        }
        
    }

    public function deleteData($id = 0)
    {
        if ($id === 0) {
            return response(["error" => "ID must Required to delete data"], 422);
        } else {
            $studentData = student::find($id);

            if ($studentData == null) {
                return response(["error" => "$id is invalid ID to delete data"], 422);
            } else {
                $studentData->delete();
                return response(["success" => "Data Deleted with $id id"], 200);
            }
        }
    }

    public function updateData($id = 0, Request $request=null)
    {
        if($id === 0) {
            return response(["error" => "ID must Required to update data"], 422);
        } else {
            $studentData = student::find($id);

            if ($studentData == null) {
                return response(["error" => "$id is invalid ID to update data"], 422);
            } else {

                $studentData->fname = $request->input("fname");
                $studentData->lname = $request->input("lname");
                $studentData->city = $request->input("city");
                $studentData->email = $request->input("email");
                $studentData->phone = $request->input("phone");
                $studentData->save();

                return response(["success" => "Data Updated with $id id"], 200);
            }
        }
    }
}
