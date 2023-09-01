<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        require_once("connection.php");

        $sqlquery = "delete from students where id = $id";
        $result = $connection->query($sqlquery);

        if($connection->affected_rows > 0){
            $response = [
                "code" => 200,
                "message" => "Data deleted with ID $id"
            ];
        }else{
            $response = [
                "code" => 404,
                "message" => "Data Not found with ID $id"
            ];
        }

        echo json_encode($response);
    }
?>