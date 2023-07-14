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

        $sqlquery = "insert into students (fname, lname, city, email, phone) values ('kairavi', 'parsana', 'Rajkot','kairavi@atmiyauni.com', '1234567890')";

        if($connection->query($sqlquery) === true){
            echo "<hr> Record Created with ".$connection->insert_id." ID";
        }else{
            echo "<hr> Error while creating a record";
        }

        $connection->close();
    ?>
</body>
</html>