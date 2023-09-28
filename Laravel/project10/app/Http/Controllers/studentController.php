<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    //

    public function addProcess(Request $request){
        $student = new student();
        /// add new data
        $student->fname = $request->input("fname");
        $student->lname = $request->input("lname");
        $student->city = $request->input("city");
        $student->email = $request->input("email");
        $student->phone = $request->input("phone");

        $student->save();

        session()->flash("success", "New Student created");
        return redirect("/");
    }

    public function getData(){
        $studentData = student::all();
        return view("viewdata", ["studentData" => $studentData]);
    }

    public function deleteData($id = 0){
        if($id == 0){
            session()->flash("error", "Must Required ID for Delete Data");
            return redirect("/viewdata");
        }

        $studentData = student::find($id);

        if($studentData == null){
            session()->flash("error", "$id is Invalid ID for Delete Data");
            return redirect("/viewdata");
        }else{
            $studentData->delete();
            session()->flash("success", "Data Deleted with ID $id");
            return redirect("/viewdata");
        }
    }

    public function editData($id = 0){
        if($id === 0){
            session()->flash("error", "Must Required ID for Edit Data");
            return redirect("/viewdata");            
        }

        $studentData = student::find($id);

        if($studentData === null){
            session()->flash("error", "$id is Invalid ID for Update Data");
            return redirect("/viewdata");
        }else{
            return view("editdata", ["student"=>$studentData]);
        }
    }

    public function updateProcess(Request $request){
        $student = new student();
        $studentData = $student->find($request->input("id"));

        $studentData->fname = $request->input("fname");
        $studentData->lname = $request->input("lname");
        $studentData->city = $request->input("city");
        $studentData->email = $request->input("email");
        $studentData->phone = $request->input("phone");
        $studentData->save();
        session()->flash("success", "Data Updated Successfully");
        return redirect("/viewdata");
    }
}
