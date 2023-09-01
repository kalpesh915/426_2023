<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        require_once("connection.php");

        $sqlquery = "select * from students where id = $id";

        $result = $connection->query($sqlquery);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $response = [
                    "code" => 200,
                    "message" => $row
                ];
            }
        }else{
            $response = [
                "code" => 404,
                "message" => "Data not found on id $id"
            ];
        }

        echo json_encode($response);
    }
?>