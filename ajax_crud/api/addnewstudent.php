<?php
    require_once("connection.php");

    if(isset($_POST["addProcess"])){
        //echo "OK";
        $fname = filterData($_POST["add_fname"]);
        $lname = filterData($_POST["add_lname"]);
        $city = filterData($_POST["add_city"]);
        $email = filterData($_POST["add_email"]);
        $phone = filterData($_POST["add_phone"]);

        //echo "$fname";
         if($fname == "" || $lname == "" || $city == "" || $email == "" || $phone == "") {
             $response = [
                 "code" => 422,
                 "message" => "All Fields are Required"
             ];
             echo json_encode($response);
         }else{
             $sqlquery = "insert into students (fname, lname, city, email, phone) values ('$fname', '$lname', '$city', '$email', '$phone')";

             $result = $connection->query($sqlquery);
             if($result){
                 $response = [
                     "code" => 200,
                     "message" => "New Record Inserted"
                 ];              
                 echo json_encode($response);
             }else{
                 $response = [
                     "code" => 500,
                     "message" => "Error while creating new record"
                 ];
                 echo json_encode($response);
             }
         }      
    }
?>