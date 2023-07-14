<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426dbms";

        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("<hr> Connection Failed ".$connection->connect_error);
        }

        $sqlquery = "insert into students (fname, lname, city, email, phone) values ('kairavi', 'parsana', 'rajkot', 'kairavi@gmail.com', '1122334455'), 
        'ganga', 'khatri', 'ganga@gmail.com', 'ahamdabad','9685745258'), 
        ('sunny', 'sata', 'sunny@gmail.com', 'surat', '1155885566') ";

        if($connection->query($sqlquery) === true){
            echo "<hr> Data Inserted";
        }else{
            echo "<hr> Problem while inserting data";
        }

        $connection->close();
    ?>
</body>
</html>