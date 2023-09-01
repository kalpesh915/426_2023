<?php
    require_once("connection.php");

    if(isset($_POST["editProcess"])){
        //echo "OK";
        $id = filterData($_POST["edit_id"]);
        $fname = filterData($_POST["edit_fname"]);
        $lname = filterData($_POST["edit_lname"]);
        $city = filterData($_POST["edit_city"]);
        $email = filterData($_POST["edit_email"]);
        $phone = filterData($_POST["edit_phone"]);

        //echo "$fname";
         if($fname == "" || $lname == "" || $city == "" || $email == "" || $phone == "") {
             $response = [
                 "code" => 422,
                 "message" => "All Fields are Required"
             ];
             echo json_encode($response);
         }else{
             $sqlquery = "update students set fname = '$fname', lname = '$lname', city = '$city', email = '$email', phone = '$phone' where id = $id";

             $connection->query($sqlquery);
             if($connection->affected_rows > 0){
                 $response = [
                     "code" => 200,
                     "message" => "Data Updated"
                 ];              
                 echo json_encode($response);
             }else{
                 $response = [
                     "code" => 500,
                     "message" => "Error while updating record"
                 ];
                 echo json_encode($response);
             }
         }      
    }
?>