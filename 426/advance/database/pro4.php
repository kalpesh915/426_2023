<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // create database with mysqli OOP

        $hostname = "localhost";
        $username = "root";
        $password = "";

        $connection = new mysqli($hostname, $username, $password);

        if($connection->connect_error){
            die("<hr> Error while connecting with database server ".$connection->connect_error);
        }

        $sqlquery = "create database 426dbms";

        if($connection->query($sqlquery) === true){
            echo "<hr> Database Created";
        }else{
            echo "<hr> Database not Created";
        }

        $connection->close();
    ?>
</body>
</html>