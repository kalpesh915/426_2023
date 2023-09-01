<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ajax_db";

    $connection = new mysqli($hostname, $username, $password, $database);

    if($connection->connect_error){
        die("Connection Failed ".$connection->connect_error);
    }

    function filterData($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }
?>