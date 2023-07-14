<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // create table with mysqli OOP

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426dbms";

        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("<hr> Error while connecting with database server ".$connection->connect_error);
        }

        $sqlquery = "create table students (id int auto_increment primary key, fname varchar(20), lname varchar(20), city varchar(20), email varchar(20), phone varchar(15))";

        if($connection->query($sqlquery) === true){
            echo "<hr> Table Created";
        }else{
            echo "<hr> Table not Created";
        }

        $connection->close();
    ?>
</body>
</html>